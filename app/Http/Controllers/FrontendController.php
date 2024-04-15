<?php

namespace App\Http\Controllers;



use App\Models\Carousel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $carousels= Carousel::query()->get()->all();
        return view('Villa.index',compact('carousels'));

    }

   
}
