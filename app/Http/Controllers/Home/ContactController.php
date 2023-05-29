<?php

namespace App\Http\Controllers\Home;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function store(ContactRequest $contactRequest)
    {
        Contact::create([
            'name'      =>  $contactRequest->input('name'),
            'email'     =>  $contactRequest->input('email'),
            'subject'   =>  $contactRequest->input('subject'),
            'message'   =>  $contactRequest->input('message'),
            'is_active' =>  0
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'Created new message successfully');

        #___________________________________ Redirect to index method
        return redirect()->back();
    }
}
