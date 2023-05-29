<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateprofileRequest;

class ProfileController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {

        #_____________ upload image

        $imageFile = $request->file('image');
        $imageFileName = generateFileName($request->image->getClientOriginalExtension());


        #_______________________________ Create data
        Profile::create([
            'uuid'          =>      Str::uuid(),
            'user_id'       =>      Auth::user()->id,
            'image'         =>      $imageFileName,
            'nike_name'     =>      $request->input('nike_name'),
            'phone_number'  =>      $request->input('phone_number'),
            'biography'     =>      $request->input('biography'),

        ]);

        $imageFile->move(public_path('upload/profile/'), $imageFileName);

        #___________________________________ Alert success
        Alert::success('success report', 'Your profile has been created correctly');

        #___________________________________ Redirect to index method
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $profile = Profile::query()->where('user_id', '=', Auth::user()->id)->first();
        return view('admin.pages.profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $profile = Profile::query()->where('user_id', '=', Auth::user()->id)->first();
        return view('admin.pages.profile.edit', compact(['profile']));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, profile $profile)
    {
        #_____________ upload and unlink why_us_image
        if (!is_null($request->image)) {

            if (file_exists(public_path('/upload/profile/' . $profile->image))) {
                unlink(public_path('upload/profile/' . $profile->image));
            }

            $imageFile = $request->file('image');
            $imageFileName = generateFileName($request->image->getClientOriginalExtension());

            $profile->update([
                'image' => $imageFileName
            ]);

            $imageFile->move(public_path('upload/profile/'), $imageFileName);
        }
        #_______________________________ Create data
        $profile->update([
            'nike_name'     =>      $request->input('nike_name'),
            'phone_number'  =>      $request->input('phone_number'),
            'biography'     =>      $request->input('biography'),
        ]);

        $profile->user()->update([
            'name'              =>      $request->input('name'),
            'email'             =>      $request->input('email'),
            'email_verified_at' =>      null
        ]);



        #___________________________________ Alert success
        Alert::success('success report', 'updated profile successfully');

        #___________________________________ updated
        $profile->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.profile.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(profile $profile)
    {
        $profile->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted profile successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.profile.index');
    }
}
