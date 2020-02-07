<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>a. Write a program that checks if value is a number (integer).</h1>
    <p>if value is '1'</p>

    <br>

    <?php 
        $value = '1';

        if(is_integer($value)){
            echo "A number";
        }else{
            echo "Not a number";
        }
    ?> 
    
    <br>

    <p>if value is 1</p>
    
    <br>

    <?php
        $value = 1;

        if(is_integer($value)){
            echo "A number";
        }else{
            echo "Not a number";
        }
    ?>

    <br><br>
    
    <h3>code</h3>
    <pre>
        $value = 1;

        if(is_integer($value)){
            echo "A number";
        }else{
            echo "Not a number";
        }
    </pre>
    

    <a href="index.html">Go back!</a>

</body>
</html>