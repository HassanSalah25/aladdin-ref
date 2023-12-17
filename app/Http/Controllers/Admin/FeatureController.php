<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $features = Feature::paginate(10);
        return view('backend.admin.feature.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.admin.feature.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'feature_name' => 'required',
        ]);

        $feature = Feature::create([
            'name' => $request->feature_name,
            'name_ar' => $request->feature_name_ar,
            'type' => $request->features_type
        ]);

        return redirect()->route('admin.features.edit',$feature)->with('feature', 'Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        //
        return view('backend.admin.feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        //
        $request->validate([
            'feature_name' => 'required',
        ]);

        $feature->update([
            'name' => $request->feature_name,
            'name_ar' => $request->feature_name_ar,
            'type' => $request->features_type
        ]);

        return redirect()->back()->with('feature', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
        $feature->delete();

        return redirect()->back()->with('feature', 'Deleted Successfully');
    }
}
