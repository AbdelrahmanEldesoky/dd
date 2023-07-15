<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PlanText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plan = PlanText::find(1);

        return View('dashboard.plan.index' ,compact('plan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return View('dashboard.plan.create');
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
        PlanText::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.plan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plan = PlanText::find($id);
        return View('dashboard.plan.show',compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $plan = PlanText::find($id);
        return View('dashboard.plan.edit',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $plan = PlanText::find($id);

        $request_data = $request->all();

        
        if ($request->image) {

            if ($plan->image != 'default.png') {

                Storage::disk('public')->delete('/front/img/' . $plan->image);

            }//end of if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('/home/u229183464/domains/bahar-app.com/public_html/b/front/img/' . $request->image->hashName());
              //  ->save('/home/u516457093/domains/w-wasabi.online/public_html/uploads/product_images/' . $request->image->hashName());
            $request_data['image'] = $request->image->hashName();

        }//end of if
        $plan->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.plan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $plan = PlanText::find($id);
        $plan->delete();
        
        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.plan.index');
    }
}
