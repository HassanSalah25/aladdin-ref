<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminController extends Controller
{
    public function index()
    {
        dd('sss');
        // Get all users with their roles
        $users = User::with('role')->get();
        return view('admin.index', compact('users'));
    }

    public function create()
    {
        // Get all roles to populate the role dropdown
        $roles = Role::all();

        return view('admin.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Create a new user
        $user = User::create($validatedData);

        return redirect()->route('admin.index')->with('success', 'Admin created successfully.');
    }

    public function edit(User $user)
    {
        // Get all roles to populate the role dropdown
        $roles = Role::all();

        return view('admin.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role_id' => 'required|exists:roles,id',
        ]);
        // Update the user
        $user->update($validatedData);

        if($request->password)
        {
            $user->update(['password'=>\Hash::make($request->password)]);
        }

        return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(User $user)
    {
        // Delete the user
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');
    }
}

