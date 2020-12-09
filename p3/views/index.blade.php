@extends('templates.master')

@section('title')
Rock, Paper Scissors!
@endsection

@section('content')

<div id="card">
    <h2>Instructions:</h2>
    <div class="center">
        <ul>
            <li>Pick your move (Rock, Paper, or Scissors) and click 'Play!'</li>
            <li>The computer will also a pick a move.</li>
            <li>Rock beats scissors, paper beats rock, and scissors beat paper!</li>
        </ul>
    </div>

    <div class="center">
        <form method="POST" action='/play'>
            <input type='radio' name='move' value='Rock' id='Rock'><label for='Rock' id="rock">Rock</label>
            <input type='radio' name='move' value='Paper' id='Paper'><label for='Paper' id="paper">Paper</label>
            <input type='radio' name='move' value='Scissors' id='Scissors'><label for='Scissors' id="scissors">Scissors</label><br>

            <button type='submit'>Play!</button>
            <a href='/history' class="page-nav">Game History</a>
        </form>
    </div>


    @if($results)
    <p><b class="titles">You played: </b><b class="results">{{ $results['move'] }}</b></p>
    <p><b class="titles">Computer played: </b><b class="results"> {{ $results['computer'] }}</b></p>
    <p><b class="titles">Result: </b><b class="results"> {{ $results['result'] }}</b></p>
    @endif

    @if($app->errorsExist())
    <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        {{ $error }}
        @endforeach
    </ul>
    @endif
</div>

@endsection
