<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    function class(){
        $nama = "Rizqina";
        $class = "2APAGI";
    
            return view("class_view", compact("nama", "class"));
        }
    }

