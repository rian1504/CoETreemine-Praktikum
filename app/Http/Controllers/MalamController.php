<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalamController extends Controller
{
    function malam ()
    {
       $data_nama = [
        ["nama" => "Kinan", "bulan" => "januari"],
        ["nama" => "Zidni", "bulan" => "februari"],
        ["nama" => "Rika", "bulan" => "maret"],
        ["nama" => "Mika", "bulan" => "april"],
        ["nama" => "Ai", "bulan" => "mei"],
        ["nama" => "Kamila", "bulan" => "juni"],
       ];

       return view("malam_view", compact("data_nama"));
    }
}
