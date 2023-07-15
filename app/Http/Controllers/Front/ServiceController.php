<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        $service_features = ServiceFeature::get();
        $contects = Contact::get();
        $footers = Footer::get();
        
        return View('front.service' ,compact('services','footers','service_features','contects'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MaterialRequest $request)
    {
       
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

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaterialRequest $request, int $id)
    {

      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
 
    }
}
