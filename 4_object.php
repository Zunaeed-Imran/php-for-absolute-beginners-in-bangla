<?php

class phone{
   var $model;

  function phoneModel($number){
     global $model;
     $model = $number;
     echo "this is $model <br>";

  }
}

$apple = new phone();
$apple->phoneModel('iPhone 14');

$nokia = new phone();
$nokia->phoneModel('Nokia X2');

?>