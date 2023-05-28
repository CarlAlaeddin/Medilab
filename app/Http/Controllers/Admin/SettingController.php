<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{

    /**
     * Summary of edit
     * @return Factory|View
     */
    public function edit()
    {
        $setting = Setting::first();
        return view('admin.pages.settings.edit', compact('setting'));
    }


    /**
     * Summary of update
     * @param \App\Http\Requests\SettingRequest $settingRequest
     * @param \App\Models\Setting $setting
     * @return RedirectResponse|mixed
     */
    public function update(SettingRequest $settingRequest, Setting $setting)
    {
        #_____________ upload and unlink why_us_image
        if (!is_null($settingRequest->why_us_image)) {

            if (file_exists(public_path('/upload/setting/' . $setting->why_us_image))) {
                unlink(public_path('upload/setting/' . $setting->why_us_image));
            }

            $imageFile = $settingRequest->file('why_us_image');
            $imageFileName = generateFileName($settingRequest->why_us_image->getClientOriginalExtension());
            $setting->why_us_image = $imageFileName;

            $imageFile->move(public_path('upload/setting/'), $imageFileName);
        }

        #_____________ update

        $setting->update([
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

        $setting->update();
        Alert::success('Success Report', 'The home page was edited correctly');
        return redirect()->back();
    }
}
