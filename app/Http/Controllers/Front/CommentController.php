<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Comment;
use App\Models\CommentTittle;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Index;
use App\Models\Service;
use App\Models\ServiceFeature;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contects = Contact::get();
        $indexs = Index::get();
        $commentTittle = CommentTittle::get();
        $footers = Footer::get();
        return View('front.quote',compact('contects','footers','indexs','commentTittle'));
    }

    public function done()
    {
        $contects = Contact::get();
        $indexs = Index::get();
        $footers = Footer::get();
        $commentTittle = CommentTittle::get();
        $footers = Footer::get();
        return View('front.done',compact('contects','footers','indexs'));
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
    public function store(Request $request)
    {
        Comment::create($request->all());

        return redirect()->route('done');

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
