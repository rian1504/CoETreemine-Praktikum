<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    function kelas(){
        $nama = "Rina";
        $kelas = "2A";

        return view("kelas_view", compact("nama", "kelas"));
    }
}
