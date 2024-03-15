<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalamController extends Controller
{
    function malam ()
    {
        $data_barang = [
            ["nama" => "Laptop", "merk" => "Samsung"],
            ["nama" => "Komputer", "merk" => "Lenovo"],
            ["nama" => "Televisi", "merk" => "LG"]
        ];

        return view("malam_view", compact("data_barang"));
    }
}
