<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        #_______________________________ Create data
        Service::create([
            'icon'         =>   $request->input('icon'),
            'title'        =>   $request->input('title'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'created new service box successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.pages.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.pages.service.edit', compact('service'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        #_______________________________ Create data
        $service->update([
            'icon'         =>   $request->input('icon'),
            'title'        =>   $request->input('title'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated service box successfully');

        #___________________________________ updated
        $service->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted service box successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.service.index');
    }
}
