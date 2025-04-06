<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form_use extends Controller
{
    function getinput(Request $request){
        // return $request;
        return $request->name ;
        
       
    }
}
