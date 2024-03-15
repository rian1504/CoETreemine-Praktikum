<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiruController extends Controller
{
    function biru ()
    {
        $data_barang = [
            ["nama" => "computer", "merk" => "samsung"],
            ["nama" => "laptop", "merk" => "acer"],
            ["nama" => "televisi", "merk" => "mitsubishi"]
        ];

        return view("biru_view", compact("data_barang"));
    }
}
