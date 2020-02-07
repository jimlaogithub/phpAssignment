<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Floyd Triangle</h1>

    <?php
        $value = $_POST["number"];
        $count = 1;
        $init = 1;
        $init2 = 1;


        for($init = intval($value);$init >= 0;$init--){
            for($init2 = $init;$init2 < intval($value);$init2++){
                echo $count;
                $count++;
            }
            echo "<br>";
        }
        
    ?>

    <h3>Code</h3>

    <pre>
    $value = $_POST["number"];
        $count = 1;
        $init = 1;
        $init2 = 1;


        for($init = intval($value);$init >= 0;$init--){
            for($init2 = $init;$init2 < intval($value);$init2++){
                echo $count;
                $count++;
            }
            echo "<br>";
        }
    </pre>

    <a href="index.html">Go Back!</a>
</body>
</html>