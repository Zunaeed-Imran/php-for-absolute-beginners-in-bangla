<?php
// echo "today is ". date("d/m/y").'<br>';
// echo "today time is ". date("h:i:sa"); // this is america default time zone

date_default_timezone_set("Asia/Dhaka");
echo "today time is ". date("h:i:sa");  // this is bangladesh time
?>