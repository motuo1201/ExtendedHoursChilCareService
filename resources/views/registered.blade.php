@extends('layouts.app')

@section('content')
<div class="container">
    <h3>既に予定登録済みです。お手数ですが園まで直接ご連絡下さい。</h3>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <h3>ログアウト</h3>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
@endsection