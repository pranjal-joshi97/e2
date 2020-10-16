<!doctype html>
<html lang='en'>

<head>
    <title>Mad Libs!</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Mad Libs!</h1>
    <h2>Mechanics:</h2>
    <ul>
        <li>Fill in the blanks below with some fun words.</li>
        <li>Click 'Submit' and you'll get a surprise!</li>
    </ul>

    <h3>Have some fun!</h3>
    <form method="GET" action="process.php">
        <ul>
            <li> <label for="adjective">Adjective:</label>
                <input type="text" name="adjective" id="adjective">
            </li><br>
            <li> <label for="noun">Noun:</label>
                <input type="text" name="noun" id="noun">
            </li><br>
            <li> <label for="animal">Animal:</label>
                <input type="text" name="animal" id="animal">
            </li><br>
            <li> <label for="noise">Noise/Sound:</label>
                <input type="text" name="noise" id="noise">
            </li><br>


        </ul>
        <input type="submit" value="Submit!">

    </form>

    <h2>Results:</h2>
    <?php

        echo "<p>$adjective Macdonald had a $noun, E-I-E-I-O</p>";
        echo "<p>and on that $noun he had an $animal, E-I-E-I-O</p>";
        echo "<p>with a $noise $noise here</p>";
        echo "<p>and a $noise $noise there,</p>";
        echo "<p>here a $noise, there a $noise,</p>";
        echo "<p>everywhere a $noise $noise,</p>";
        echo "<p>$adjective Macdonald had a $noun, E-I-E-I-O.</p>";
    ?>
    <a href="index.php">Play again!</a>

</body>

</html>