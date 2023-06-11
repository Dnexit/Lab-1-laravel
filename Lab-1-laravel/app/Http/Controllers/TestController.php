<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    private $rules = [];
    private $errors = [];

    public function indexAction(){
        $errors = [];

        if( !empty($request) ){
            $errors = $this->Validate($request);
        }

        return view('test',  [
            "errors" => $errors,
        ]);
    }

}
