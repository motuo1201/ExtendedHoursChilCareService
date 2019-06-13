<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class PrintController extends Controller
{
    public function print(Request $request,Schedule $schedule)
    {
        $this->authorize('admin');
        $request->validate([
            'date' => 'required|date'
        ]);
        $targetSchedule = $schedule->where('sheduled_date',$request->date)->with('child')->get();
        return view('print')->with('schedules',$targetSchedule)->with('date',$request->date);
    }
}
