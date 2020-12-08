@extends('templates.master')

@section('title')
Round Details

@endsection

@section('content')
<h2>Round Details</h2>

<p>You played: {{ $round['move'] }}</p>
<p>Computer played: {{ $round['computer'] }}</p>
<p>Result: {{ $round['result'] }}</p>
<p>Time: {{ $round['time'] }}</p>

@endsection
