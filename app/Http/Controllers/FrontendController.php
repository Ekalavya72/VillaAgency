<?php

namespace App\Http\Controllers;



use App\Models\Carousel;
use App\Models\Property;
use App\Models\Site_configs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $siteconfig = Site_configs::all();
        $carousels= Carousel::query()->get()->all();
        return view('Villa.index',compact('siteconfig','carousels'));

    }
    
    public function properties(){
        $siteconfig = Site_configs::all();
        $properties = Property::query()->paginate(9);
        return view('Villa.properties',compact('siteconfig','properties'));
    }
    public function propertiesdetails($id){
        $siteconfig = Site_configs::all();
        $property = Property::query()->where('id',$id)->first();
        return view('Villa.property-details',compact('siteconfig','property'));

    }
    public function contact(){
        $siteconfig = Site_configs::all();
        return view('Villa.contact',compact('siteconfig'));
    }

   
}
