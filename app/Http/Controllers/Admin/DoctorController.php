<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

class DoctorController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        #_____________ upload image

        $imageFile = $request->file('image');
        $imageFileName = generateFileName($request->image->getClientOriginalExtension());


        #_______________________________ Create data
        Doctor::create([
            'image'         =>  $imageFileName,
            'name'          =>  $request->input('name'),
            'position'      =>  $request->input('position'),
            'biography'     =>  $request->input('biography'),
            'is_active'     =>  $request->input('is_active'),
            'linkedin'      =>  $request->input('linkedin'),
            'twitter'       =>  $request->input('twitter'),
            'facebook'      =>  $request->input('facebook'),
            'instagram'     =>  $request->input('instagram'),
        ]);

        $imageFile->move(public_path('upload/doctor/'), $imageFileName);

        #___________________________________ Alert success
        Alert::success('success report', 'created new doctor successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.doctor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('admin.pages.doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.pages.doctor.edit', compact('doctor'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, doctor $doctor)
    {
        #_____________ upload and unlink why_us_image
        if (!is_null($request->image)) {

            if (file_exists(public_path('/upload/doctor/' . $doctor->image))) {
                unlink(public_path('upload/doctor/' . $doctor->image));
            }

            $imageFile = $request->file('image');
            $imageFileName = generateFileName($request->image->getClientOriginalExtension());
            $doctor->image = $imageFileName;

            $imageFile->move(public_path('upload/doctor/'), $imageFileName);
        }
        #_______________________________ Create data
        $doctor->update([
            'name'          =>  $request->input('name'),
            'position'      =>  $request->input('position'),
            'biography'     =>  $request->input('biography'),
            'is_active'     =>  $request->input('is_active'),
            'linkedin'      =>  $request->input('linkedin'),
            'twitter'       =>  $request->input('twitter'),
            'facebook'      =>  $request->input('facebook'),
            'instagram'     =>  $request->input('instagram'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated doctor successfully');

        #___________________________________ updated
        $doctor->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted doctor successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.doctor.index');
    }
}
