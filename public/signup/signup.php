<?php
session_start();
include "../includes/db.php";

if ($_POST) {
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $contact = $_POST["tel"];
    $pw = $_POST["pw"];
    $date = date("Y-m-d H:i:s");

    // Queries

    $unquery = mysqli_query($db, "SELECT * FROM vcaf_users WHERE uname='$uname'");
    $equery = mysqli_query($db, "SELECT * FROM vcaf_users WHERE email='$email'");
    $pquery = mysqli_query($db, "SELECT * FROM vcaf_users WHERE phone='$contact'");
    // end Queries

    if (mysqli_num_rows($unquery) >= 1) {
        echo "Sorry username already exists.";
    } elseif (mysqli_num_rows($equery) >= 1) {
        echo "Sorry email already exists.";
    } elseif (mysqli_num_rows($pquery) >= 1) {
        echo "Sorry phone already exists.";
    } else {
        $stmt = mysqli_prepare($db, "INSERT INTO vcaf_users (created_on, uname, email, pw, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $date, $uname, $email, $pw, $contact);

        $stmt->execute();
        $stmt->close();
    }
}
?>