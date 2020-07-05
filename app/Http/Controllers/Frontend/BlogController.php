<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as LaravelController;

class BlogController extends LaravelController
{
    public function index()
    {
        return view('app.frontend.blog.index');
    }
}
