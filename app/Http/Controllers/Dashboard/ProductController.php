<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        $category = Category::get();
        return View('dashboard.product.index' ,compact(['products','category']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $category = Category::get();
        return View('dashboard.product.create' ,compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        if ($request->image) {

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u229183464/domains/bahar-app.com/public_html/b/front/img/' . $request->image->hashName());
              //  ->save('/home/u516457093/domains/w-wasabi.online/public_html/uploads/product_images/' . $request->image->hashName());
            $request_data['image'] = $request->image->hashName();

        }//end of if
        Product::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return View('dashboard.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::find($id);
        $category = Category::get();
        return View('dashboard.product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $product = Product::find($id);

        $request_data = $request->all();

        
        if ($request->image) {

            if ($product->image != 'default.png') {

                Storage::disk('public')->delete('/front/img/' . $product->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u229183464/domains/bahar-app.com/public_html/b/front/img/' . $request->image->hashName());
              //  ->save('/home/u516457093/domains/w-wasabi.online/public_html/uploads/product_images/' . $request->image->hashName());
            $request_data['image'] = $request->image->hashName();

        }//end of if
        $product->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->delete();
        
        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.product.index');
    }
}
