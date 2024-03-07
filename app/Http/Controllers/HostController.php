<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    function host(){
        $nama="SarahAliaZqi";
        $kelas="2APAGI";

        return view("host_view", compact("nama", "kelas"));
    }

}
