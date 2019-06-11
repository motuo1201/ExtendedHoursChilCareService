@extends('layouts.app')

@section('content')
<div class="container">
    <h3>始めにお子様の情報を登録してください(最大3名)</h3>
    <form class="form" method="POST" action="{{route('register-children')}}">
    {{ csrf_field() }}
    <table class="table">
        <thead>
            <th>姓</th>
            <th>名</th>
            <th>クラス</th>
            <th>組</th>
        </thead>
        <tbody>
            @for ($i = 0; $i < 3; $i++)
                <tr>
                    <td><input class="form-control" type="text" name="family_name[{{$i}}]"></td>
                    <td><input class="form-control" type="text" name="first_name[{{$i}}]"></td>
                    <td>
                        <select name="class[{{$i}}]" class="form-control">
                            <option value="つき">つき</option>
                            <option value="ひかり">ひかり</option>
                            <option value="そら">そら</option>
                        </select>
                    </td>
                    <td>
                        <select name="group[{{$i}}]" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </td>
                </tr>                    
            @endfor
        </tbody>
    </table>
    <div class="row">
        <input type="submit" value="登録する" class="btn btn-primary btn-block">
    </div>
    </form>
</div>
@endsection