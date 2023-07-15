<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Index;
use App\Models\OurFeture;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class OurFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $our_feature = OurFeture::find(1);

        return View('dashboard.our_feature.index' ,compact('our_feature'));
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
        $our_feature = OurFeture::find(1);

        return View('dashboard.our_feature.edit',compact('our_feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $OurFeture = OurFeture::find($id);

        $request_data = $request->all();


        $request_data = $request->all();

        if ($request->image) {

            if ($OurFeture->image != 'default.png') {

                Storage::disk('public')->delete('/front/img/' . $OurFeture->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u229183464/domains/bahar-app.com/public_html/b/front/img/' . $request->image->hashName());
              //  ->save('/home/u516457093/domains/w-wasabi.online/public_html/uploads/product_images/' . $request->image->hashName());
            $request_data['image'] = $request->image->hashName();

        }//end of if


        $OurFeture->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.our_feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
      //
    }
}
