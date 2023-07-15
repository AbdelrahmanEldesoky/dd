<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Index;
use App\Models\OurFeture;
use App\Models\Price;
use App\Models\PricesFeaure;
use App\Models\product;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\Team;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = Index::get();
        $about = About::get();
        $feature = Feature::get();
        $our_fetures = OurFeture::get();
        $services = Service::get();
        $service_features = ServiceFeature::get();
        $price = Price::get();
        $prices_Feaure =PricesFeaure::get();
        $teams = Team::get();
        $product = product::get();
        $contect = Contact::get();

        return View('front.index',
        compact('index','about','feature','our_fetures',
    'services','service_features','services','service_features',
    'price','prices_Feaure','price','prices_Feaure','teams',
    'product','contect'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
