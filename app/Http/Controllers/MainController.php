<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;

class MainController extends Controller
{
    /**
     * 初期画面表示
     *
     * @return void
     */
    public function index()
    {
        $user = Auth::user();
        if($user->children->count() === 0){
            return view('registrer_children');
        }
        return view('main')->with('user',$user);
    }
    /**
     * お迎え予定登録処理
     *
     * @param Request $request
     * @param Schedule $schedule
     * @return void
     */
    public function registerSchedule(Request $request,Schedule $schedule)
    {
        $request->validate([
            'child.*.transferee'       => 'required_with:child.*.estimated_time,child.*.body_temperature',
            'child.*.estimated_time'   => 'required_with:child.*.transferee,child.*.body_temperature',
            'child.*.body_temperature' => 'required_with:child.*.transferee,child.*.estimated_time'
        ]);
        foreach($request->child as $child){
            if($child['transferee']){
                $child['sheduled_date'] = date('Y/m/d');
                $schedule->fill($child)->save();
            }
        }
        return redirect(route('main'));
    }

    public function print()
    {
        return view('print');
    }
}
