<?php
include_once "includes/header.php";

if (!isset($_SESSION['vcaf_user'])) {
    header('Location: ' . $site . 'login');
} else {
?>

    <main class="w-full h-full flex">
        <?php include 'components/navbar/index.php'; ?>
        <div class="md:ml-16">
            <?php
            if (isset($_SESSION['vcaf_user']) && $_SESSION['vcaf_user'] == "admin") {
                include 'components/admin/index.php';
            } else {
                include 'components/main/index.php';
            }
            ?>
        </div>

    </main>

    <script>
        var title = "Homepage";
        $("#title").html(title);
    </script>

<?php
}
?>