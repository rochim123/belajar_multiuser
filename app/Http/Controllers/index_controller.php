<?php

namespace App\Htpp\Controllers;

use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
        return view('index');
    }
}