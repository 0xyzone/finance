<?php
session_start();
include "includes/globalvar.php";
unset($_SESSION['vcaf_user']);
session_destroy();
header('location: '.$site);
?>