<?php
include_once "includes/header.php";

if (!isset($_SESSION['vcaf_user'])) {
    header('Location: ' . $site . 'login');
} else {
?>

    <main class="w-full h-full md:flex">
        <?php include 'components/navbar/index.php'; ?>
        <div class="md:ml-16 w-full h-full p-10">
            <?php
            if (isset($_SESSION['vcaf_user']) && $_SESSION['vcaf_user'] == "admin") {
                include 'components/admin/index.php';
            } else {
                include 'components/main/index.php';
            }
            ?>
        </div>

    </main>

<?php
include './includes/footer.php';
};
?>