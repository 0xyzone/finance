<?php
include '../../includes/globalvar.php';
session_start();
if ($_POST) {
    if ($_POST['tuser'] == "invalid") {
        $_SESSION['error'] = "Please select an user and try again!";
        header('Location:' . link . '?page=transactions');
    } else {
        date_default_timezone_set('Asia/Kathmandu');
        $date = date('Y-m-d H:i:s');
        $user = $_POST['tuser'];
        $transdate = $_POST['transdate'];
    }
}
