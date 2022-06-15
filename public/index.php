<?php
include_once "includes/header.php";

if(!isset($_SESSION['vcaf_user'])){
    header('Location: '.$site.'login');
}else{
    ?>

<p class="bg-gray-500">Hello <?php if(isset($_SESSION['vcaf_user'])){ echo $_SESSION['vcaf_user']; } else { echo ""; } ?></p>

<script>
    var title = "Homepage";
    $("#title").html(title);
</script>

<?php
}
?>

