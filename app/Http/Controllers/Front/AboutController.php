<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRequest;
use App\Models\About;

use App\Models\Contact;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $abouts = About::get();
        $features = Feature::get();
        $teams = Team::get();
        $contects = Contact::get();
        $footers = Footer::get();

        return View('front.about',compact(['abouts','footers','teams','features','contects']));
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
    public function store(ClassRequest $request)
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
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassRequest $request, int $id)
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
