<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        $option = Setting::first();

        return view('home.index', compact('option'));
    }
}
