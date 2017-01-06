<?php

namespace syslab\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('admin.store');
    }

    public function interna(){
        return view('admin.interna');
    }
}
