<?php
session_start();
include "../includes/db.php";
include "../includes/globalvar.php";

if($_POST){
    $uname = $_POST['uname'];
    $password = $_POST['pw'];
    $pw = md5($password);

    $query = mysqli_query($db, "SELECT * FROM vcaf_users WHERE (uname='$uname' || email='$uname' || phone='$uname') && pw='$pw'");
    $res = mysqli_fetch_array($query);
    
    if(mysqli_num_rows($query) > 0){
        $_SESSION['success'] = "Logged in successfully.";
        $_SESSION['vcaf_user'] = $res['uname'];
        header('Location: '.$site);
    } else {
        $_SESSION['error'] = "Password nai birsyo kya?";
        header('Location: '.$site.'login');
    }
}
?>