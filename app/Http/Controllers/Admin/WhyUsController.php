<?php

namespace App\Http\Controllers\Admin;

use App\Models\WhyUs;
use Illuminate\Http\Request;
use App\Http\Requests\WhyUsRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class WhyUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $why_us = WhyUs::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.why-us.index', compact('why_us'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.why-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhyUsRequest $request)
    {
        #_______________________________ Create data
        WhyUs::create([
            'icon'         =>   $request->input('icon'),
            'title'        =>   $request->input('title'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'created new box successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.whyUs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(WhyUs $whyUs)
    {
        return view('admin.pages.why-us.show', compact('whyUs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhyUs $whyUs)
    {
        return view('admin.pages.why-us.edit', compact('whyUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhyUsRequest $request, WhyUs $whyUs)
    {
        #_______________________________ Create data
        $whyUs->update([
            'icon'         =>   $request->input('icon'),
            'title'        =>   $request->input('title'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated new box successfully');

        #___________________________________ updated
        $whyUs->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.whyUs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WhyUs $whyUs)
    {
        $whyUs->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted new box successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.whyUs.index');
    }
}
