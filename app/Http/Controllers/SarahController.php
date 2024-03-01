<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarahController extends Controller
{
    function sarah(){
        $nama = "Sarah";
        $kelas = "Informatika";
        return view ("sarah" , compact("nama" , "kelas"));
    }
}
