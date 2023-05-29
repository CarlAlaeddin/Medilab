<?php

namespace App\Http\Controllers\Home;

use App\Models\Faq;
use App\Models\WhyUs;
use App\Models\Doctor;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Setting;
use App\Models\WhyChoose;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicalController extends Controller
{
    public function index()
    {
        $option             = Setting::first();
        $departments        = Department::query()->orderBy('id', 'asc')->where('is_active', '=', 1)->get();
        $departmentCount    = Department::query()->count();
        $doctors            = Doctor::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        $doctorCount        = Doctor::query()->count();
        $services           = Service::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        $faqs               = Faq::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        $galleries          = Gallery::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        $whyChooses         = WhyChoose::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        $whyUs              = WhyUs::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();
        $contacts           = Contact::query()->orderBy('id', 'DESC')->where('is_active', '!=', 0)->get();

        return view(
            'home.index',
            compact([
                'option',
                'departments',
                'doctors',
                'services',
                'doctorCount',
                'departmentCount',
                'faqs',
                'galleries',
                'whyChooses',
                'whyUs',
                'contacts'
            ])
        );
    }
}
