@extends('templates.master')

@section('title')
Rock, Paper Scissors!
@endsection

@section('content')

<h2>Instructions:</h2>
<ul>
    <li>Pick your move (Rock, Paper, or Scissors) and click 'Play!'</li>
    <li>The computer will also a pick a move.</li>
    <li>Rock beats scissors, paper beats rock, and scissors beat paper!</li>
</ul>

<form method="POST" action='/play'>
    <input type='radio' name='move' value='Rock' id='Rock'><label for='Rock'>Rock</label>
    <input type='radio' name='move' value='Paper' id='Paper'><label for='Paper'>Paper</label>
    <input type='radio' name='move' value='Scissors' id='Scissors'><label for='Scissors'>Scissors</label><br>


    <button type='submit'>Play!</button>
</form>

@if($results)
<p>You played: {{ $results['move'] }}</p>
<p>Computer played: {{ $results['computerThrow'] }}</p>
<p>Result: {{ $results['result'] }}</p>

@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<a href='/history'>Game History</a>

@endsection
