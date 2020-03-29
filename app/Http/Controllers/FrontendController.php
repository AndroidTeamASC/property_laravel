<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Property;
class FrontendController extends Controller
{
    //
    public function index($value='')
    {
    	return view('frontend.index');
    }
    public function property($value='')
    {
        $properties = Property::all();    
        return view('frontend.property',compact('properties'));
    }
    public function agent($value='')
    {
    	return view('frontend.agent');
    }
    public function blog($value='')
    {
    	return view('frontend.blog');
    }

    public function propertyDetail($id)
    {   
        $feature = Feature::all();
        $property = Property::find($id);
        

        return view('frontend.property_detail',compact('property','feature'));
    }
}
