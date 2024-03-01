<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    function index()
    {
        $dataBarang = [
            ["id" => 1, "nama_barang" => "Microcontroller Boards", "gambar" => "micro.gif"],
            ["id" => 2, "nama_barang" => "Industrial Arduino Shields", "gambar" => "arduino.jpg"],
            ["id" => 3, "nama_barang" => "Motor Control", "gambar" => "motor.jpg"],
            ["id" => 4, "nama_barang" => "Breakout Boards", "gambar" => "breakout.jpg"],
            ["id" => 5, "nama_barang" => "Upgrades and Components", "gambar" => "upgrades.png"],
            ["id" => 6, "nama_barang" => "Serial Boards", "gambar" => "serial.png"],
            ["id" => 7, "nama_barang" => "Memory", "gambar" => "memory.jpg"],
        ];

        return view("list_item", compact("dataBarang"));
    }
}
