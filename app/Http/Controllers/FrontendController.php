<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Property;
use App\Type;
use Illuminate\Support\Facades\View;
class FrontendController extends Controller
{
    //
    public function __construct()
  {
    //its just a dummy data object.
    $types = type::all();

    // Sharing is caring
    View::share('types', $types);
  }
    public function index($value='')
    {
        
    	return view('frontend.index');
    }
    public function property($value='')
    {
        $properties = Property::all();
        $types = Type::all();


        return view('frontend.property' ,compact('properties',['types' => 'types'] ));
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
