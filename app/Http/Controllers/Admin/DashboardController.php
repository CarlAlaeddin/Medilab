<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contactCount       = Contact::query()->count();
        $doctorCount        = Doctor::query()->count();
        $departmentCount    = Department::query()->count();
        $appointmentCount   = Appointment::query()->count();
        $users              = User::all();
        return view('admin.index',compact(['contactCount','doctorCount','departmentCount','appointmentCount','users']));
    }
}
