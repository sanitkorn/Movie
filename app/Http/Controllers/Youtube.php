<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube extends Controller
{
    public function index(Request $r)
    {
        // print_r($request->input("keyword")); 
        print_r ($r->query());
       
    }
}
