@extends('layouts.print')
@section('paper-size')
A4 landscape
@endsection
@section('contents')
    <section class="sheet padding-10mm">
        <div class="boxContainer">
            <div class="box" style="width:80mm">
                <h3><u>お迎え予定</u></h3>
            </div>        
        </div>
        <div id="tbl-bdr">
            <table>
            </table>
        </div> 
    </section>

@endsection