<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::orderBy('id','desc')->get();
        return view('backend.admin.business.index', compact('businesses'));
    }

    public function create()
    {
        // return view('business.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required',
            'name' => 'required',
            'activity_name' => 'required',
        ]);

        Business::create($validated);

        return redirect()->back()->with('success', 'Business created successfully.');
    }

    public function edit(Business $business)
    {
        // return view('business.edit', compact('business'));
    }

    public function update(Request $request, Business $business)
    {
        // $validated = $request->validate([
        //     'phone' => 'required',
        //     'name' => 'required',
        //     'activity_name' => 'required',
        // ]);

        // $business->update($validated);

        // return redirect()->route('business.index')->with('success', 'Business updated successfully.');
    }

    public function destroy(Business $business)
    {
        // $business->delete();

        // return redirect()->route('business.index')->with('success', 'Business deleted successfully.');
    }
}
