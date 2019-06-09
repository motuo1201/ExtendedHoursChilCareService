<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Child;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->children->count() ==0){
            return view('registrer_children');
        }
        return view('main')->with('user',$user);
    }

    public function print()
    {
        return view('print');
    }
}
