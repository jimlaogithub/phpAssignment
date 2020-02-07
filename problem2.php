<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Positive or Negative Odd or Even</h1>
    <?php
        $value = $_POST['value'];
        

        if($value >= 0){
            if($value%2 == 0){
                echo "{$value} is positive and even";
            }else{
                echo "{$value} is positive and odd";
            }
        }else if ($value < 0){
            if($value%2 == 0){
                echo "{$value} is Negative and even";
            }else{
                echo "{$value} is Negative and odd";
            }
        }
    ?>

    <br><br>

    <h3>Code</h3>
    <pre>
        $value = $_POST['value'];
        

        if($value >= 0){
            if($value%2 == 0){
                echo "{$value} is positive and even";
            }else{
                echo "{$value} is positive and odd";
            }
        }else if ($value < 0){
            if($value%2 == 0){
                echo "{$value} is Negative and even";
            }else{
                echo "{$value} is Negative and odd";
            }
        }
    </pre>

    <a href="index.html">Go Back!</a>
</body>
</html>