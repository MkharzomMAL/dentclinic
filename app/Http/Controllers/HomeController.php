<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $sliders = Slider::where('enable',1)->orderby('sort')->get();

        return view('homepage',compact('sliders'));
    }
}
