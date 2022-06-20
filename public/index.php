<?php
include_once "includes/header.php";

if (!isset($_SESSION['vcaf_user'])) {
    header('Location: ' . $site . 'login');
} else {
?>

    <main class="w-full h-full flex">
        <?php include 'components/navbar/index.php'; ?>
        <?php include 'components/main/index.php'; ?>
    </main>

    <script>
        var title = "Homepage";
        $("#title").html(title);
    </script>

<?php
}
?>