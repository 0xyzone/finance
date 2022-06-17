<?php
include_once "includes/header.php";

if(!isset($_SESSION['vcaf_user'])){
    header('Location: '.$site.'login');
}else{
    ?>

<!-- <p class="bg-gray-500">Hello <?php if(isset($_SESSION['vcaf_user'])){ echo $_SESSION['vcaf_user']; } else { echo ""; } ?></p> -->
<div class="w-full h-full">
<?php include 'components/navbar/index.php'; ?>
</div>

<script>
    var title = "Homepage";
    $("#title").html(title);
</script>

<?php
}
?>

