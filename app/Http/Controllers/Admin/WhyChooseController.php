<?php

namespace App\Http\Controllers\Admin;

use App\Models\WhyChoose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WhyChooseRequest;
use RealRashid\SweetAlert\Facades\Alert;

class WhyChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $why_choose = WhyChoose::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.why-choose.index', compact('why_choose'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.why-choose.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhyChooseRequest $request)
    {
        #_______________________________ Create data
        WhyChoose::create([
            'icon'         =>   $request->input('icon'),
            'title'        =>   $request->input('title'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'created new why choose box successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.whyChoose.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(WhyChoose $whyChoose)
    {
        return view('admin.pages.why-choose.show', compact('whyChoose'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhyChoose $whyChoose)
    {
        return view('admin.pages.why-choose.edit', compact('whyChoose'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(WhyChooseRequest $request, WhyChoose $whyChoose)
    {
        #_______________________________ Create data
        $whyChoose->update([
            'icon'         =>   $request->input('icon'),
            'title'        =>   $request->input('title'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated why choose box successfully');

        #___________________________________ updated
        $whyChoose->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.whyChoose.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WhyChoose $whyChoose)
    {
        $whyChoose->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted why choose box successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.whyChoose.index');
    }
}
