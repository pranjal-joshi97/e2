<!doctype html>
<html lang='en'>

<head>
    <title>Rock, Paper Scissors!</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Rock Paper Scissors</h1>
    <h2>Mechanics:</h2>
    <ul>
        <li>Pick your move (Rock, Paper, or Scissors) and click 'Play!'</li>
        <li>The computer will also a pick a move.</li>
        <li>Rock beats scissors, paper beats rock, and scissors beat paper!</li>
    </ul>


    <form method="GET" action="process.php">
        <input type='radio' name='choice' value='Rock' id='Rock'><label for='Rock'>Rock</label>
        <input type='radio' name='choice' value='Paper' id='Paper'><label for='Paper'>Paper</label>
        <input type='radio' name='choice' value='Scissors' id='Scissors'><label for='Scissors'>Scissors</label><br>


        <button type='submit'>Play!</button>
    </form>

    <h2>Results:</h2>
    <ul>
        <li>You played: <?php echo $choice ?>
        </li>
        <li>Computer played: <?php echo $computerThrow ?>
        </li>
        <li>Winner: <?php echo $finalResult ?>
        </li>
    </ul>

</body>

</html>