<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\CommentTittle;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Index;
use App\Models\OurFeture;
use App\Models\Price;
use App\Models\PricesFeaure;
use App\Models\Product;
use App\Models\ProductTittle;
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
        $indexs = Index::get();
        $abouts = About::get();
        $features = Feature::get();
        $our_fetures = OurFeture::get();
        $services = Service::get();
        $service_features = ServiceFeature::get();
        $prices = Price::get();
        $prices_Feaure =PricesFeaure::get();
        $teams = Team::get();
        $products = Product::get();
        $contects = Contact::get();
        $commentTittle = CommentTittle::get();
        $productTittle = ProductTittle::get();
        $footers = Footer::get();
        return View('front.index',
        compact('indexs','abouts','features','our_fetures',
    'services','service_features','services','service_features',
    'prices','prices_Feaure','prices','prices_Feaure','teams',
    'products','contects','commentTittle','productTittle','footers'));
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
