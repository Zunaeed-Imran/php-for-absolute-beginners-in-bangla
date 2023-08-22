<?php

echo strlen("I am Imran")."<br>"; // it will show the length of string
echo str_word_count("I am Imran")."<br>"; // it will count the word
echo strrev("I am Imran")."<br>";  // it will reverse string
echo strpos("I am Imran", "am")."<br>";  // it will show the "am" position

$test = strpos("I am Imran", "am");  //it will show "am" position and 
var_dump($test);

?>