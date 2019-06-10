@extends('layouts\app')

@section('content')
<div class="container">
    @component('layouts.alert-message')
    @endcomponent
    @component('layouts.alert-error')
    @endcomponent
    <h3>{{date('Y/m/d')}}  延長保育申込</h3>
    @foreach ($user->children as $children)
    <hr>
    <form class="form" method="POST" action="{{route('registerSchedule')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-offset-1 col-md-9 col-s-12">
                <h4>
                    氏名:{{$children->family_name}} {{$children->first_name}}
                    クラス:{{$children->class}}{{$children->group}}組
                </h4>
                <hr>
    
                <div class="form-group">
                    <label for="Transferee" class="form-label">お迎えの方</label>
                    <input class="form-control" type="text" name="child[{{$children->id}}][transferee]" id="transferee"
                           placeholder="お迎え予定の方のお名前を記入してください"
                           value="{{old('child.' . $children->id. '.transferee')}}">
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        <label for="estimated_time" class="form-label">お迎え予定時刻</label>
                        <input class="form-control" type="time" name="child[{{$children->id}}][estimated_time]" id="estimated_time"
                               value="{{old('child.' . $children->id. '.estimated_time')}}">
                    </div>
                    <div class="col-sm-3">
                        <label for="estimated_time" class="form-label">体温</label>
                        <input class="form-control" type="number" step="0.1" min="35" max="40" name="child[{{$children->id}}][body_temperature]" id="body_temperature"
                               placeholder="体温" value="{{old('child.' . $children->id. '.body_temperature')}}">>        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row" style="margin-top: 100px">
            <input type="submit" value="登録する" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
@endsection