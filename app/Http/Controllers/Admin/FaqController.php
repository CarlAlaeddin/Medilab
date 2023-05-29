<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::query()->orderBy('id', 'DESC')->paginate(10);
        return view('admin.pages.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        #_______________________________ Create data
        Faq::create([
            'answer'        =>   $request->input('answer'),
            'question'      =>   $request->input('question'),
            'is_active'     =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'created new faq successfully');

        #___________________________________ Redirect to index method
        return redirect()->route('admin.faq.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        return view('admin.pages.faq.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.pages.faq.edit', compact('faq'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        #_______________________________ Create data
        $faq->update([
            'answer'        =>   $request->input('answer'),
            'question'      =>   $request->input('question'),
            'is_active'     =>   $request->input('is_active'),
        ]);

        #___________________________________ Alert success
        Alert::success('success report', 'updated faq successfully');

        #___________________________________ updated
        $faq->update();

        #___________________________________ Redirect to index method
        return redirect()->route('admin.faq.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        #___________________________________ Alert success
        Alert::warning('success report', 'deleted faq successfully');
        #___________________________________ Redirect to index method
        return redirect()->route('admin.faq.index');
    }
}
