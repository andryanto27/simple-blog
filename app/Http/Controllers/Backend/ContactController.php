<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\AdminController;

class ContactController extends AdminController
{
    protected $layout = "contact";
    protected $title = "Contact";
}
