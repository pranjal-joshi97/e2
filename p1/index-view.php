<!doctype html>
<html lang='en'>

<head>
   <title>Dice Roller Simulator</title>
   <meta charset='utf-8'>
</head>

<body>
   <h1>Dice Roller Simulator</h1>
   <h2>Mechanics:</h2>
   <ul>
      <li>Player 1 and Player 2 each throw a dice until either player rolls a 6.</li>
      <li>Whoever rolls a 6 first (in the least rounds) wins!</li>
      <li>If both the players' roll a 6 within the same rounds, it's a tie!</li>
   </ul>


   <h2>Results:</h2>
   <ul>
      <li>Player 1 rolled <?php echo(count($player1Results));?>
         rounds.</li>
      <li>Player 2 rolled <?php echo(count($player2Results));?>
         rounds.</li>
      <li>Winner: <?php echo($finalResult);?>
      </li>
   </ul>

   <h2>Rounds</h2>
   Player 1:
   <ul>
      <?php foreach ($player1Results as $key => $value) { ?>
      <li><?php echo $value; ?>
      </li>
      <?php } ?>
   </ul>
   Player 2:
   <ul>
      <?php foreach ($player2Results as $key => $value) { ?>
      <li><?php echo $value; ?>
      </li>
      <?php } ?>
   </ul>




</body>

</html>