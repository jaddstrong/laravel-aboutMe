<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfosController extends Controller
{
    public function index(){
        return view('info.index');
    }

    public function info(){
        return view('info.info');
    }

    public function exp(){
        return view('info.exp');
    }

    public function contact(){
        return view('info.contact');
    }
}
