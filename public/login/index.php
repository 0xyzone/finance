<?php
include "../includes/header.php";

if (isset($_SESSION['vcaf_user'])) {
    header('Location: ' . $site);
} else {
?>

    <section class="signup">
        <div class="text-2xl font-bold text-white">Log In</div>
        <form action="login.php" method="POST" id="signup">
            <input type="text" name="uname" id="uname" placeholder="Username/Email Address/Phone" autocomplete="off" required>
            <input type="password" name="pw" id="pw" placeholder="Password" required>
            <button for="signup" type="submit" class="w-max btn-primary mx-auto mt-2">Log In</button>
        </form>
    </section>

<?php
}
?>