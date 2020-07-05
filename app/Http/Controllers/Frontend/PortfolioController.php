<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as LaravelController;

class PortfolioController extends LaravelController
{
    public function index()
    {
        return view('app.frontend.portfolio.index');
    }
}
