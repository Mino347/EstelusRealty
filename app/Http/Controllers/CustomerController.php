<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
//use App\Models\Trend;


class CustomerController extends Controller
{
    // 1. Function to display latest properties on the home page
    public function home() {
        $properties = Property::latest()->take(10)->get();
       // $properties = Property::all();
        return view('home', compact('properties'));
    }

    // 2. Function to display filtered properties based on location
//    public function properties(Request $request) {
//        $properties = Property::where('status', 'available')
//            ->when($request->location, function($query, $location) {
//                return $query->where('location', $location);
//            })
//            ->get();
//        return view('customer.properties', compact('properties'));
//    }



//    public function trends() {
//        $trends = Trend::all();
//        return view('customer.trends', compact('trends'));
//    }





}
