@extends('layouts.app')

@section('content')
<div class="container">
    @component('layouts.alert-message')
    @endcomponent
    @component('layouts.alert-error')
    @endcomponent
    <h3 class="text-primary">{{date('Y/m/d')}}  延長保育申込</h3>
    @foreach ($user->children as $children)
    <hr>
    <form class="form" method="POST" action="{{route('registerSchedule')}}" class="form-horizontal">
        {{ csrf_field() }}
        <div class="col-md-offset-1 col-md-9 col-s-12">
            <h4 class="text-primary">
                氏名:{{$children->family_name}} {{$children->first_name}}
                クラス:{{$children->class}}{{$children->group}}組
            </h4>
            <input type="hidden" value="{{$children->id}}" name="child[{{$children->id}}][child_id]">
            <hr>

            <div class="form-group">
                <label for="Transferee" class="control-label">お迎えの方</label>
                <input class="form-control" type="text" name="child[{{$children->id}}][transferee]" id="transferee"
                        placeholder="お迎え予定の方のお名前を記入してください"
                        value="{{old('child.' . $children->id. '.transferee')}}">
            </div>
            <div class="form-group">
                <div class="row">
                    <label for="estimated_time" class="control-label col-md-2">お迎え予定</label>
                    <input class="form-control  col-md-1" type="time" name="child[{{$children->id}}][estimated_time]" id="estimated_time"
                            value="{{old('child.' . $children->id. '.estimated_time')}}">        
                    <label for="estimated_time" class="control-label  col-md-1">体温</label>
                    <input class="form-control  col-md-1" type="number" step="0.1" min="35" max="40" name="child[{{$children->id}}][body_temperature]" id="body_temperature"
                            placeholder="体温" value="{{old('child.' . $children->id. '.body_temperature')}}">                
                </div>
            </div>
        </div>
        @endforeach
        <div class="row" style="margin-top: 1em">
            <input type="submit" value="登録する" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
@endsection