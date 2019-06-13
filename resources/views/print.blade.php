@extends('layouts.print')
@section('paper-size')
A4 landscape
@endsection
@section('contents')
    <section class="sheet padding-10mm">
        <div class="boxContainer">
            <div class="box" style="width:80mm">
            <h3><u>{{$date}} お迎え予定</u></h3>
            </div>        
        </div>
        <div id="tbl-bdr" style="width:100%">
            <table width="100%">
                <thead>
                    <th style="width: 10cm">姓</th>
                    <th style="width: 10cm">名</th>
                    <th style="width:  5cm">クラス</th>
                    <th style="width: 10cm">お迎え予定</th>
                    <th style="width:  5cm">時刻</th>
                    <th style="width:  5cm">体温</th>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td>{{$schedule->child->family_name}}</td>
                            <td>{{$schedule->child->first_name}}</td>
                            <td>{{$schedule->child->class . $schedule->child->group.'組'}}</td>
                            <td>{{$schedule->transferee}}</td>
                            <td align="center">{{date('H:i',strtotime($schedule->estimated_time))}}</td>
                            <td align="center">{{$schedule->body_temperature}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </section>

@endsection