<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PositionDoctor;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\PositionDoctorRequest;

class PositionDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = PositionDoctor::query()->orderBy('id','desc')->paginate(10);
        return view('admin.pages.position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PositionDoctorRequest $request)
    {
        PositionDoctor::create([
            'position'  =>  $request->input('position'),
            'is_active'  =>  $request->input('is_active')
        ]);


        #___________________________________ Alert success
        Alert::success('success report', 'created new position successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.position.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PositionDoctor $positionDoctor)
    {
        return view('admin.pages.position.show', compact('positionDoctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PositionDoctor $positionDoctor)
    {
        return view('admin.pages.position.edit', compact('positionDoctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PositionDoctor $positionDoctor)
    {
        $positionDoctor->update([
            'position'  =>  $request->input('position'),
            'is_active'  =>  $request->input('is_active')
        ]);


        #___________________________________ Alert success
        Alert::success('success report', 'Updated position successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.position.index');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PositionDoctor $positionDoctor)
    {
        $positionDoctor->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted position box successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.position.index');
    }
}
