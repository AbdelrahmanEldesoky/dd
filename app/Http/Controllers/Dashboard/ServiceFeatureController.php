<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\ServiceFeature;
use Illuminate\Http\Request;

class ServiceFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_feature = ServiceFeature::get();

        return View('dashboard.service.feature.index' ,compact('service_feature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dashboard.service_feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request_data = $request->all();

        ServiceFeature::create($request_data);

        session()->flash('success', 'تم الاضافة بنجاح');
        return redirect()->route('dashboard.service.feature.index');
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
        $service_feature = ServiceFeature::find($id);

        return View('dashboard.service.feature.edit',compact('service_feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $service = ServiceFeature::find($id);

        $request_data = $request->all();

        $service->update($request_data);

        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.service_feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = ServiceFeature::find($id);
        $service->delete();
        session()->flash('success', 'تم التعديل بنجاح');
        return redirect()->route('dashboard.service_feature.index');
    }
}
