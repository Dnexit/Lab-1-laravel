<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function indexAction(){
        $vars = [

        ];

        return view('learning');
    }
}
