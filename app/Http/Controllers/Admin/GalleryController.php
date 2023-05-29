<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::query()->orderBy('id', 'DESC')->paginate(50);
        return view('admin.pages.gallery.index', compact(['galleries']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        #_____________ upload image

        $imageFile = $request->file('image');
        $imageFileName = generateFileName($request->image->getClientOriginalExtension());

        #_______________________________ Create data
        Gallery::create([
            'image'                 =>  $imageFileName,
            'is_active'             =>  $request->input('is_active'),
        ]);

        $imageFile->move(public_path('upload/gallery/'), $imageFileName);

        #___________________________________ Alert success
        Alert::success('success report', 'created new gallery successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('admin.pages.gallery.show', compact(['gallery']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.pages.gallery.edit', compact(['gallery']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        #_____________ upload and unlink why_us_image
        if (!is_null($request->image)) {

            if (file_exists(public_path('/upload/gallery/' . $gallery->image))) {
                unlink(public_path('upload/gallery/' . $gallery->image));
            }

            $imageFile = $request->file('image');
            $imageFileName = generateFileName($request->image->getClientOriginalExtension());
            $gallery->image = $imageFileName;

            $imageFile->move(public_path('upload/gallery/'), $imageFileName);
        }
        #_______________________________ Create data
        $gallery->update([
            'is_active'                 =>  $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated gallery successfully');

        #___________________________________ updated
        $gallery->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if (file_exists(public_path('/upload/gallery/' . $gallery->image))) {
            unlink(public_path('upload/gallery/' . $gallery->image));
        }
        $gallery->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted doctor successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.gallery.index');
    }
}
