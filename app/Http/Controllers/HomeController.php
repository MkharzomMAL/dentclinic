<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function index(){

        $sliders = Slider::where('enable',1)->orderby('sort')->get();

        return view('homepage',compact('sliders'));
    }

    public function aboutUs(){
        return view('aboutUs');
    }
    public function service(){
        return view('service');
    }
    public function contact(){
        return view('contactUs');
    }
}
