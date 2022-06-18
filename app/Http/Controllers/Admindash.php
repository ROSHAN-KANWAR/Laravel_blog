<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admindash extends Controller
{
    public function Homeadmin(){
        return view("Admin.home");
    }
}
