<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    public function index()
    {
        // Retrieve and display a list of plans
        $plans = Plan::orderBy('id', 'desc')->paginate(10); // Fetch all plans from the database
        return view('backend.admin.plan.index', ['all_plans' => $plans]); // Display in a view

    }

    public function show($id)
    {
        // Show a specific plan based on $id
    }

    public function create()
    {
        // Show a form to create a new plan
        $features = Feature::all();
        return view('backend.admin.plan.create', compact('features')); // Display in a view

    }

    public function store(Request $request)
    {

        $hasDuplicates = collect($request->feature_id)->duplicates()->count() > 0;
        if ($hasDuplicates) {
            return redirect()->back()->with('error', 'There is redundant in feature');
        }

        // Store a newly created plan
        $request->validate([
            'plan_name' => 'required',
            'plan_name_ar' => 'required',
            'plan_price' => 'required',
            'plan_status' => 'required',
        ]);
        $plan = Plan::create([
            'plan_name' => $request->plan_name,
            'plan_name_ar' => $request->plan_name_ar,
            'plan_price' => $request->plan_price,
            'plan_status' => $request->plan_status,
            'plan_status' => $request->plan_status,
            'plan_description' => $request->plan_description,
            'plan_description_ar' => $request->plan_description_ar,
            'plan_period' => $request->plan_period,
        ]);
        foreach ($request->feature_id as $key => $feature) {
            $plan->features_value()->create([
                'feature_id' => $feature,
                'value' => $request->value[$key]
            ]);
        }
        return redirect()->route('admin.plans.edit', $plan)->with('success', 'Created Successfully');
    }

    public function edit(Plan $plan)
    {
        // Show the form to edit a specific plan
        $features = Feature::all();
        return view('backend.admin.plan.edit', compact('plan', 'features')); // Display in a view

    }

    public function update(Request $request, Plan $plan)
    {
        $hasDuplicates = collect($request->feature_id)->duplicates()->count() > 0;
        if ($hasDuplicates) {
            return redirect()->back()->with('error', 'There is redundant in feature');
        }


        $plan->features_value()->delete();
        if($request->feature_id)
            foreach ($request->feature_id as $key => $feature) {
                $plan->features_value()->create([
                    'feature_id' => $feature,
                    'value' => $request->value[$key]
                ]);
            }
        // Update the specified plan
        $request->validate([
            'plan_name' => 'required',
            'plan_name_ar' => 'required',
            'plan_price' => 'required',
            'plan_status' => 'required',
        ]);
        $plan->update([
            'plan_name' => $request->plan_name,
            'plan_name_ar' => $request->plan_name_ar,
            'plan_price' => $request->plan_price,
            'plan_status' => $request->plan_status,
            'plan_description' => $request->plan_description,
            'plan_description_ar' => $request->plan_description_ar,
            'plan_period' => $request->plan_period,
        ]);


        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function destroy(Plan $plan)
    {
        // Remove a specific plan
        $plan->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
