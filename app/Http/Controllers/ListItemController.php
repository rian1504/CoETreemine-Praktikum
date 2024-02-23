<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    function index()
    {
        return view("list_item", [
            "title" => "List Item",
            "barang" => [
                "barang1" => "PCB Prototype",
                "barang2" => "PCB Assembly",
            ]
        ]);
    }
}
