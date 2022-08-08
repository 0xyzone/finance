<?php
include '../../includes/globalvar.php';
include '../../includes/db.php';
session_start();
if ($_POST) {
    if ($_POST['tuser'] == "invalid") {
        $_SESSION['error'] = "Please select an user and try again!";
        header('Location:' . link . '?page=transactions');
    } elseif ($_POST['transdate'] == "") {
        $_SESSION['error'] = "Please enter a valid date!";
        header('Location:' . link . '?page=transactions');
    } elseif ($_POST['mop'] == "") {
        $_SESSION['error'] = "Please choose a valid Mode of Payment!";
        header('Location:' . link . '?page=transactions#mop');
    } elseif ($_POST['rrn'] == "") {
        $_SESSION['error'] = "Please enter value in RRN.";
        header('Location:' . link . '?page=transactions');
    } else {
        date_default_timezone_set('Asia/Kathmandu');
        $created_on = date('Y-m-d H:i:s');
        $user = $_POST['tuser'];
        $transdatepost = $_POST['transdate'];
        $transdate = date('Y-m-d', strtotime($transdatepost));
        $mop = $_POST['mop'];
        $rrn = $_POST['rrn'];
        if (isset($_POST['transid'])) {
            $transid = $_POST['transid'];
        } else {
            $transid = "";
        };
        $amt = $_POST['amt'];
        $validation = $_POST['verify'];


        $stmt = $db->prepare("INSERT INTO vcaf_transactions (created_on, transdate, uname, mop, transid, rrn, amt, stas) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssis', $created_on, $transdate, $user, $mop, $transid, $rrn, $amt, $validation);
        $stmt->execute();
        $stmt->close();

        $_SESSION['success'] = "Transaction added successfully!";
        header('Location: ' . link . '?page=transactions');
    }
}
