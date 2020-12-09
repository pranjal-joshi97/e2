<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        $results = $this->app->old('results');
        
        return $this->app->view('index', [
            'results' => $results
        ]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
    
        return $this->app->view('history', [
            'rounds' => $rounds
        ]);
    }

    public function round()
    {
        $id = $this->app->param('id');
        $round = $this->app->db()->findById('rounds', $id);
        
        return $this->app->view('round', [
            'round' => $round,
        ]);
    }

    public function play()
    {
        $this->app->validate([
            'move' => 'required'
        ]);
        
        $move = $this->app->input('move');

        # Save results to the database
        $moves = ['Rock', 'Paper', 'Scissors'];
        $computer = $moves[rand(0, 2)];
        $result = ["It's a tie!", "You won :)", "You lost :("];

        # Compare user and computer moves
        if ($computer == $move) {
            $result = "It's a tie!";
        } elseif ($computer == 'Rock' && $move == 'Paper') {
            $result = "You won :)";
        } elseif ($computer == 'Scissors' && $move == 'Paper') {
            $result = "You lost :(";
        } elseif ($computer == 'Scissors' && $move == 'Rock') {
            $result = "You won :)";
        } elseif ($computer == 'Paper' && $move == 'Rock') {
            $result = "You lost :(";
        } elseif ($computer == 'Paper' && $move == 'Scissors') {
            $result = "You won :)";
        } elseif ($computer == 'Rock' && $move == 'Scissors') {
            $result = "You lost :(";
        }
        
        $data = [
        'move' => $move,
        'computer' => $computer,
        'result' => $result,
        'time' => date('Y-m-d H:i:s'),
        ];

        $this->app->db()->insert('rounds', $data);

        # Redirect the user back to the index page to play again
        $this->app->redirect('/', [
            'results' => [
                'move' => $move,
                'computer' => $computer,
                'result' => $result,
            ]
        ]);
    }
}