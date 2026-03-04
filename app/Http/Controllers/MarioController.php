<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MarioController extends Controller
{
    public function index(){
        return view('mario');
    }
}

