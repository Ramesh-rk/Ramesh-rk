<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function admin1(){
        return view('admin.admin1');
    }
    public function admin2(){
        return view('admin.admin2');
    }
    public function admin3(){
        return view('admin.admin3');
    }
}
