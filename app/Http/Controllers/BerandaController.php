<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // $var_nama = "admin";
        return view('layout.main');
    }
}
