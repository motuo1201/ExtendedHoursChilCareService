<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
    public function print()
    {
        return view('print');
    }
}
