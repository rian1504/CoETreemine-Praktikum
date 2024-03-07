<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    function laptop () {
       $data_nama = [
        ["nama" => "Reyna", "umur" => "sepuluh"],
        ["nama" => "Kirana", "umur" => "lima"],
        ["nama" => "Pramestia", "umur" => "tujuh"],
        ["nama" => "Ricky", "umur" => "sembilan"],
       ];

       return view("laptop_view", compact("data_nama"));
    }
}
