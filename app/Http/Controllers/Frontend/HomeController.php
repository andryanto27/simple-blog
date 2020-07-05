<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as LaravelController;

class HomeController extends LaravelController
{
    public function home()
    {
        return view('app.frontend.home');
    }

    public function about()
    {
        return view('app.frontend.about');
    }

    public function contact()
    {
        return view('app.frontend.contact');
    }
}
