<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    // this middleware implement on all methods in this Controller
    public function __construct()
    {
//        $this->middleware('auth');
        //this middleware except only this method
        $this->middleware('auth')->except('showString1');
    }

    public function showString(){
        return 'static string';
    }
    public function showString1(){
        return 'static string 1';
    }
    public function showString2(){
        return 'static string 2';
    }
    public function showString3(){
        return 'static string 3';
    }
}
