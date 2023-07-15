<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Index;
use App\Models\OurFeture;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contects = Contact::get();
        $our_fetures = OurFeture::get();
        $indexs = Index::get();
        $footers = Footer::get();
        return View('front.privacy',compact('our_fetures','footers','contects','indexs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
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
    public function edit(int $id)
    {
        $contact = Contact::find($id);

        return View('dashboard.contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $contact = Contact::find($id);

        $request_data = $request->all();

        $contact->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //
    }
}
