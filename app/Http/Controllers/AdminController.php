<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;


class AdminController extends Controller
{
    public function dashboard() {
        $properties = Property::count();
        $users = User::count();
        return view('admin.dashboard', compact('properties', 'users'));
    }

    // 1. Function to show the create property form
    public function createProperty() {
        return view('admin.property.create');
    }

    // 2. Function to store a new property
    public function storeProperty(Request $request) {
        Property::create($request->all());
        return redirect()->back()->with('success', 'Property added successfully!');
    }

    // 3. Function to list all users (for User Management)
    public function users() {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

}
