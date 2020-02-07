<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Factorial of a number</h1>

    <?php
        $value = $_POST["num"];
        $inc = 1;
        $factorial = 1;
        for($inc = 1;$inc <= intval($value);$inc++){
            $factorial *= $inc;
        }

        echo "The factorial of {$value} is {$factorial}";
    ?>
    <h3>Code</h3>

    <pre>
        $value = $_POST["num"];
        $inc = 1;
        $factorial = 1;
        for($inc = 1;$inc <= intval($value);$inc++){
            $factorial *= $inc;
        }

        echo "The factorial of {$value} is {$factorial}";
    </pre>

    <a href="index.html">Go Back!</a>
</body>
</html>