<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KikiController extends Controller
{
    function kiki(){
        return view("kiki_view");
    }
}
