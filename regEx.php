<?php
    $givenStatement = 'abcde$ddfd @abcd )der]';
    $newstatement = preg_replace("/[^A-Za-z0-9 ]/", '', $givenStatement);
    echo 'New string : '.$newstatement."<br>";
?>