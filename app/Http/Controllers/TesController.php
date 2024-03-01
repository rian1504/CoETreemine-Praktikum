<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    function alia ()
    {
        $nama = "alia";
        $kelas = "2a";
        return view("alia_tes", compact ("nama" , "kelas"));
    }
}
