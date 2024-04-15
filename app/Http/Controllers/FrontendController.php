<?php

namespace App\Http\Controllers;



use App\Models\Carousel;
use App\Models\Property;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $carousels= Carousel::query()->get()->all();
        return view('Villa.index',compact('carousels'));

    }
    public function properties(){
        $properties = Property::query()->paginate(9);
        return view('Villa.properties',compact('properties'));
    }

   
}
