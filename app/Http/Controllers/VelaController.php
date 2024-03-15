<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VelaController extends Controller
{
    function pagi(){
        $nama = "Sarah";
        $kelas = "Informatika";
        return view ("vela_view" , compact("nama" , "kelas"));
    }
}
