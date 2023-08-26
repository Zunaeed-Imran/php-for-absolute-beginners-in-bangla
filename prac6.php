<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prac6.php" method="get">
        <input type="number" name="num1" placeholder="Enter 1st number"><br>
        <input type="number" name="num2" placeholder="Enter 2nd number"><br>
        <input type="symbol" name="symbol" placeholder="Enter any Symbil"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

class cal{
    function all($a, $b){

        if($_REQUEST['']){
            echo "Select any Operate";
        }elseif($_REQUEST['+']){
            echo $a + $b;
        }elseif($_REQUEST['-']){
            echo $a - $b;
        }elseif($_REQUEST['*']){
            echo $a * $b;
        }elseif($_REQUEST['/']){
            echo $a / $b;
        }
    }
}


?>