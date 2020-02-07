<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PALINDROME</h1>

    <?php
        $text = $_POST["word"];

        if(strrev($text) == $text){
            echo "{$text} is a PALINDROME";
        }else{
            echo "{$text} is not a PALINDROME";
        }
    ?>

    <h3>Code</h3>

    <pre>
        
            $text = $_POST["word"];

            if(strrev($text)){
                echo "{$text} is a PALINDROME";
            }else{
                echo "{$text} is not a PALINDROME";
            }
        
    </pre>

    <a href="index.html">Go Back!</a>
</body>
</html>