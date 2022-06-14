<?php
session_start();
include "globalvar.php";
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo link ?>css/output.css">
    <script src="<?php echo link ?>js/jquery-3.6.0.min.js"></script>
    <title id="title"></title>
</head>
<body class="bg-neutral-800 w-screen h-screen">

<?php
if(isset($_SESSION['success'])) :
?>
<div class="successnoti">
    <?php
    echo $_SESSION['success'];
    ?>
</div>
<?php
endif;
?>
    