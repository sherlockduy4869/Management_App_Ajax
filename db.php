<?php
$con = new mysqli("localhost","root","","management_app_ajax");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
else{
    echo "connected mysqli";
}
?>
