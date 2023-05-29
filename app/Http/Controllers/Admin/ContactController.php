<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.contact.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.pages.contact.show', compact('contact'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            'contact'       =>  $request->input('contact'),
            'is_active'     =>  $request->input('is_active')
        ]);


        #___________________________________ Alert success
        Alert::success('success report', 'Updated contact successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted contact item successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.contact.index');
    }
}
