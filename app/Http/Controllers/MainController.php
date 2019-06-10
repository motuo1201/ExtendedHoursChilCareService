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
    public function index(Schedule $schedule)
    {
        $user = Auth::user();
        if($user->children->count() === 0){
            return view('registrer_children');
        }
        $registered = $schedule->where('users.id'      ,$user->id)
                               ->where('sheduled_date' ,date('Y/m/d'))
                               ->join('children','schedules.child_id','=','children.id')
                               ->join('users'   ,'children.user_id'  ,'=','users.id'   )
                               ->get();
        if($registered->count()===0){
            return view('main')->with('user',$user);
        }
        return view('registered');
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
        return view('finished');
    }

    public function print()
    {
        return view('print');
    }
}
