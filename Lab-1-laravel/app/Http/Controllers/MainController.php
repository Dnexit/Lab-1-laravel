<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexAction(){
        $vars = [

        ];

        return view('main');
    }
}
