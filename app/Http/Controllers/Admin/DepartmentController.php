<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        #_____________ upload image

        $imageFile = $request->file('image');
        $imageFileName = generateFileName($request->image->getClientOriginalExtension());


        #_______________________________ Create data
        Department::create([
            'image'        =>   $imageFileName,
            'name'        =>   $request->input('name'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        $imageFile->move(public_path('upload/department/'), $imageFileName);

        #___________________________________ Alert success
        Alert::success('success report', 'created new department successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.department.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('admin.pages.department.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('admin.pages.department.edit', compact('department'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request, Department $department)
    {
        #_____________ upload and unlink why_us_image
        if (!is_null($request->image)) {

            if (file_exists(public_path('/upload/department/' . $department->image))) {
                unlink(public_path('upload/department/' . $department->image));
            }

            $imageFile = $request->file('image');
            $imageFileName = generateFileName($request->image->getClientOriginalExtension());
            $department->image = $imageFileName;

            $imageFile->move(public_path('upload/department/'), $imageFileName);
        }
        #_______________________________ Create data
        $department->update([
            'name'        =>   $request->input('name'),
            'description'  =>   $request->input('description'),
            'is_active'    =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated department successfully');

        #___________________________________ updated
        $department->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.department.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted department successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.department.index');
    }
}
