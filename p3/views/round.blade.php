@extends('templates.master')

@section('title')
Round Details

@endsection

@section('content')
<div id="card">
    <a href='/' class="page-nav">Homepage</a>
    <h2>Round Details</h2>
    <p><b class="titles">You played:</b> <b class="results">{{ $round['move'] }}</b></p>
    <p><b class="titles">Computer played:</b> <b class="results">{{ $round['computer'] }}</b></p>
    <p><b class="titles">Result:</b> <b class="results">{{ $round['result'] }}</b></p>
    <p><b class="titles">Time:</b> <b class="results">{{ $round['time'] }}</b></p>


</div>
@endsection
