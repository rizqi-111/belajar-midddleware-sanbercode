<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class TestController extends Controller
{
    //
    public function route1(){
        return "<h2>Ini Route 1<h2><h4>Anda Masuk Sebagai : ".Auth::user()->name."<h4>";
    }

    public function route2(){
        return "<h2>Ini Route 2<h2><h4>Anda Masuk Sebagai : ".Auth::user()->name."<h4>";
    }

    public function route3(){
        return "<h2>Ini Route 3<h2><h4>Anda Masuk Sebagai : ".Auth::user()->name."<h4>";
    }
}
