<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Setting;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $option = Setting::first();
        $departments = Department::query()->orderBy('id', 'DESC')->where('is_active', '=', 1)->get();
        $doctors = Doctor::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        return view('home.index', compact(['option', 'departments', 'doctors']));
    }
}
