@extends('layouts\app')

@section('content')
<div class="container">
    <h3>延長保育申込</h3>
    <table class="table">
        <thead>
            <th>姓</th>
            <th>名</th>
            <th>クラス１</th>
            <th>クラス２</th>
            <th>お迎え予定の方</th>
            <th>お迎え時刻</th>
        </thead>
        <tbody>
            <tr>
                <td><input class="form-control" type="text"></td>
                <td><input class="form-control" type="text"></td>
                <td><input class="form-control" type="text"></td>
                <td><input class="form-control" type="text"></td>
                <td><input class="form-control" type="text"></td>        
                <td><input class="form-control" type="time"></td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <input type="submit" value="登録する" class="btn btn-primary btn-block">
    </div>
</div>
@endsection