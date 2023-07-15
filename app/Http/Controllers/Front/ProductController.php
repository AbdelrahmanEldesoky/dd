<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\PlanText;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        if($id==1) {
            $products = Product::with('category')->get();
        }else{
            $products = Product::with('category')->where('category_id',$id)->get();
        }
        $posts = Post::get();
        $categories = Category::get();
        $plans = PlanText::get();
        $footers = Footer::get();
        $contects = Contact::get();

        return View('front.blog' ,compact('products','contects','footers','categories','posts','plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function product_id(Request $request,$id)
    {   
        $products = Product::with('category')->where('id',$id)->get();
        $posts = Post::get();
        $categories = Category::get();
        $plans = PlanText::get();
        $footers = Footer::get();
        $contects = Contact::get();

        return View('front.details' ,compact('products','contects','footers','categories','posts','plans'));
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
        $school = SchoolYear::find($id);

        return View('dashboard.school.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SchoolYearRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
