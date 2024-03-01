<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    function kelas(){
        $data_nama = [
            ["nama" => "Rian", "kelas" => "2A"],
            ["nama" => "Alia", "kelas" => "2B"],
            ["nama" => "Rizqi", "kelas" => "2C"],
            ["nama" => "Sarah", "kelas" => "2D"],
            ["nama" => "Firman", "kelas" => "2Z"],
        ];

        return view("kelas_view", compact("data_nama"));
    }
}
