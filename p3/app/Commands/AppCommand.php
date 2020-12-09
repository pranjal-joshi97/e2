<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }

    public function migrate()
    {
        # Note that the *createTable* method automatically adds an auto-incrementing
        # primary key column so you don’t have to include that in your array of columns.
        $this->app->db()->createTable('rounds', [
        'move' => 'varchar(255)',
        'computer' => 'varchar(255)',
        'result' => 'varchar(255)',
        'time' => 'timestamp',
        ]);
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 past rounds
        for ($i = 0; $i < 10; $i++) {
            $moves = ['Rock', 'Paper', 'Scissors'];
            $computer = array_rand($moves);

            # Set up a round
            $round = [
                'move' => $moves[$computer],
                'result' => rand(0, 2),
                'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ];

            # Insert the round
            $this->app->db()->insert('rounds', $round);
        }
    }
}