<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

    <style>
    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }
    </style>
</head>

<body>

    <h1>Mystery Word Results</h1>
    <!-- Your guess is <?php echo $results; ?> -->
    <?php if ($haveAnswer == false) { ?>
    You did not enter an answer
    <?php } else { ?>

    <?php if ($correct) { ?>
    <div class='correct'>You got it correct.</div>
    <?php } else { ?>
    <div class='incorrect'>Sorry that is not correct.</div>
    <?php } ?>

    <?php } ?>



    <a href='index.php'>Play again </a>

</body>

</html>