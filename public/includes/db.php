<?php
date_default_timezone_set("Asia/Kathmandu");
$db = mysqli_connect("localhost","vidantac","malaiktha1290","vidantac_finance");

if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}
?>