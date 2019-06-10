<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->children->count() === 0){
            return view('registrer_children');
        }
        return view('main')->with('user',$user);
    }
    public function registerSchedule(Request $request)
    {
        $request->validate([
            'child.*.transferee'       => 'required_with:child.*.estimated_time,child.*.body_temperature',
            'child.*.estimated_time'   => 'required_with:child.*.transferee,child.*.body_temperature',
            'child.*.body_temperature' => 'required_with:child.*.transferee,child.*.estimated_time'
        ]);
        dd($request);
    }

    public function print()
    {
        return view('print');
    }
}
