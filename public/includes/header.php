<?php
session_start();
include "globalvar.php";
include "db.php";
if (isset($_SESSION['vcaf_user'])) {
    $user = $_SESSION['vcaf_user'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="<?php echo link ?>img/logo.gif" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?php echo link ?>css/output.css">
    <link rel="stylesheet" href="<?php echo link ?>css/all.css">
    <script src="<?php echo link ?>js/jquery-3.6.0.min.js"></script>
    <title id="title"></title>
</head>

<body class="bg-neutral-800 w-screen h-screen relative font-light lg:font-normal">

    <?php
    if (isset($_SESSION['error'])) :
    ?>
        <div class="hidden lg:block absolute z-20 w-max py-2 px-4 font-bold lg:bottom-8 lg:right-8 bg-red-200 text-red-800 border border-current fadeInLeft text-xl shadow-main rounded" id="err">
            <?php echo $_SESSION['error']; ?>
        </div>
        <div class="flex w-full justify-center">
            <div class="lg:hidden absolute z-20 w-max py-2 px-4 font-bold top-2 bg-red-200 text-red-800 border border-current fadeInTop text-xl shadow-main rounded" id="err2">
                <?php echo $_SESSION['error']; ?>
            </div>
        </div>

        <script>
            setTimeout(function() {
                $('#err').fadeOut('slow');
                <?php unset($_SESSION['error']); ?>
            }, 3000); // <-- time in milliseconds
            setTimeout(function() {
                $('#err2').fadeOut('slow');
                <?php unset($_SESSION['error']); ?>
            }, 3000); // <-- time in milliseconds
        </script>
    <?php endif;  ?>
    <?php
    if (isset($_SESSION['success'])) :
    ?>
        <div class="hidden lg:block absolute z-20 w-max py-2 px-4 lg:bottom-8 bottom-16 lg:right-8 bg-lime-200 text-lime-800 border border-current fadeInLeft text-xl shadow-main rounded" id="success">
            <?php echo $_SESSION['success']; ?>
        </div>
        <div class="flex justify-center w-full">
            <div class="lg:hidden absolute z-20 w-max py-2 px-4 top-2 bg-lime-200 text-lime-800 border border-current fadeInTop text-xl shadow-main rounded" id="success2">
                <p><?php echo $_SESSION['success']; ?></p>
            </div>
        </div>

        <script>
            setTimeout(function() {
                $('#success').fadeOut('slow');
                <?php unset($_SESSION['success']); ?>
            }, 3000); // <-- time in milliseconds
            setTimeout(function() {
                $('#success2').fadeOut('slow');
                <?php unset($_SESSION['success']); ?>
            }, 3000); // <-- time in milliseconds
        </script>
    <?php endif;  ?>