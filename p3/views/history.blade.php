@extends('templates.master')

@section('title')
Game History

@endsection

@section('content')
<div id="card">
    <a href='/' class="page-nav">Homepage</a>
    <h2>Game History</h2>
    <div class="center">
        <ul>
            @foreach($rounds as $round)
            <li><a href='/round?id={{ $round['id'] }}'>{{ $round['time'] }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
