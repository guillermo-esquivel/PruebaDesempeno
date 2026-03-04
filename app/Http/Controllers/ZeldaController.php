<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZeldaController extends Controller
{
    public function index(){
        return view('zelda');
    }
}
