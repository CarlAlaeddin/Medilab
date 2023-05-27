<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $setting = Setting::first();
        return view('admin.pages.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $settingRequest, Setting $setting)
    {

        $setting->update([
            'why_us_image'             =>   $settingRequest->why_us_image,
            'logo'                     =>   $settingRequest->logo,
            'email'                    =>   $settingRequest->email,
            'phone_number'             =>   $settingRequest->phone_number,
            'address'                  =>   $settingRequest->address,
            'twitter'                  =>   $settingRequest->twitter,
            'linkedin'                 =>   $settingRequest->linkedin,
            'facebook'                 =>   $settingRequest->facebook,
            'instagram'                =>   $settingRequest->instagram,
            'telegram'                 =>   $settingRequest->telegram,
            'hero_title'               =>   $settingRequest->hero_title,
            'hero_description'         =>   $settingRequest->hero_description,
            'hero_button_text'         =>   $settingRequest->hero_button_text,
            'hero_button_src'          =>   $settingRequest->hero_button_src,
            'why_us_title'             =>   $settingRequest->why_us_title,
            'why_us_description'       =>   $settingRequest->why_us_description,
            'why_us_button_text'       =>   $settingRequest->why_us_button_text,
            'why_us_button_src'        =>   $settingRequest->why_us_button_src,
            'about_title'              =>   $settingRequest->about_title,
            'about_description'        =>   $settingRequest->about_description,
            'service_title'            =>   $settingRequest->service_title,
            'service_description'      =>   $settingRequest->service_description,
            'appointment_title'        =>   $settingRequest->appointment_title,
            'appointment_description'  =>   $settingRequest->appointment_description,
            'departments_title'        =>   $settingRequest->departments_title,
            'departments_description'  =>   $settingRequest->departments_description,
            'doctors_title'            =>   $settingRequest->doctors_title,
            'doctors_description'      =>   $settingRequest->doctors_description,
            'questions_title'          =>   $settingRequest->questions_title,
            'questions_description'    =>   $settingRequest->questions_description,
            'gallery_title'            =>   $settingRequest->gallery_title,
            'gallery_description'      =>   $settingRequest->gallery_description,
            'contact_title'            =>   $settingRequest->contact_title,
            'contact_description'      =>   $settingRequest->contact_description,
            'latitude'                 =>   $settingRequest->latitude,
            'longitude'                =>   $settingRequest->longitude,
            'footer_description'       =>   $settingRequest->footer_description,
            'author'                   =>   $settingRequest->author,
        ]);
        $settingRequest->why_us_image->move('/upload/pages/' , $why_us_image_name);

        $setting->update();
        Alert::success('title', 'edit page successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
