<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\OpeningHour;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $contactUs = ContactUs::first();
            $opens = OpeningHour::orderBy('sort')->get();

            View::share('contactUs', $contactUs );
            View::share('opens', $opens );

            return $next($request);
            
        });
    }
}
