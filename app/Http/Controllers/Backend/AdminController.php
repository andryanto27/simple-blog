<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as LaravelController;
use App\Traits\Authorizable;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends LaravelController
{
    use Authorizable;

    protected $layout;
    protected $title;
    protected $data = array();

    public function home()
    {
        
    }

    public function index()
    {
        $this->data["title"] = $this->title;
        return view("app.backend.".$this->layout.".index", $this->data);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function update($id, Request $request)
    {

    }

    public function destroy($id)
    {

    }

}
