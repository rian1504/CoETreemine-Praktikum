<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListItemController extends Controller
{
    function index()
    {
        return view("list_item", [
            "title" => "List Item",
            "nama_barang" => "PCB",
        ]);
    }
}
