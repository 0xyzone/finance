<?php
session_start();
include "../includes/db.php";
include "../includes/globalvar.php";

if ($_POST) {
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $contact = $_POST["tel"];
    $password = $_POST["pw"];
    $pw = md5($password);
    $date = date("Y-m-d H:i:s");

    // Queries

    $unquery = mysqli_query($db, "SELECT * FROM vcaf_users WHERE uname='$uname'");
    $equery = mysqli_query($db, "SELECT * FROM vcaf_users WHERE email='$email'");
    $pquery = mysqli_query($db, "SELECT * FROM vcaf_users WHERE phone='$contact'");
    // end Queries

    if (mysqli_num_rows($unquery) >= 1) {
        $_SESSION['error'] = "Username already exists. Please use something else!";
        header('Location: '.$site.'signup');
    } elseif (mysqli_num_rows($equery) >= 1) {
        $_SESSION['error'] = "Email already exists. Please use something else!";
        header('Location: '.$site.'signup');
    } elseif (mysqli_num_rows($pquery) >= 1) {
        $_SESSION['error'] = "Phone number already exists. Please use something else!";
        header('Location: '.$site.'signup');
    } else {
        $stmt = mysqli_prepare($db, "INSERT INTO vcaf_users (created_on, uname, email, pw, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $date, $uname, $email, $pw, $contact);

        $stmt->execute();
        $stmt->close();

        $_SESSION['success'] = "Sign Up Successful! Please Log in!";
        header('Location: '.$site.'');
    }
}
?>