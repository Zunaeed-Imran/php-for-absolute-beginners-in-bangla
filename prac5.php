<?php

class test5{

    function math($a,  $b){
        $c = $a + $b;
        echo "Sum of teh Number is $c";
    }
}
$sum = new test5();
$sum->math(5, 50);
?>