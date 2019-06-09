@extends('layouts\app')

@section('content')
<div class="container">
    <h3>{{date('Y/m/d')}}  延長保育申込</h3>
    <div class="row">
        <div class="col-md-offset-1 col-md-9 col-s-12">
            @foreach ($user->children as $children)
                <h4>
                氏名:{{$children->family_name}} {{$children->first_name}}
                クラス:{{$children->class}}{{$children->group}}組
                </h4>
                <hr>
                <div class="form-group">
                    <label for="Transferee" class="form-label">お迎えの方</label>
                    <input class="form-control" type="text" name="transferee" id="transferee"
                    placeholder="お迎え予定の方のお名前を記入してください">        
                </div>
                <label for="estimated_time" class="form-label">お迎え時刻と体温</label>
                <div class="form-group">
                    <div class="col-sm-3">
                        予定時刻
                        <input class="form-control" type="time" name="estimated_time" id="estimated_time">
                    </div>
                    <div class="col-sm-3">
                        体温
                        <input class="form-control" type="number" name="body_temperature" id="body_temperature"
                        placeholder="体温">        
                    </div>
                </div>
            @endforeach
            <div class="row" style="margin-top: 100px">
                <input type="submit" value="登録する" class="btn btn-primary btn-block">
            </div>
        </div>
    </div>
</div>
@endsection