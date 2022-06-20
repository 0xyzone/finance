<?php
include "../includes/header.php";

if (isset($_SESSION['vcaf_user'])) {
    header('Location: ' . $site);
} else {
?>

    <section class="signup">
        <div class="text-2xl font-bold text-white">Log In</div>
        <form action="login.php" method="POST" id="signup">
            <input type="text" name="uname" id="uname" placeholder="Username/Email Address/Phone" autofocus="on" required>
            <input type="password" name="pw" id="pw" placeholder="Password" required>
            <div class="flex mx-auto gap-2 items-center mt-2">
        <button for="signup" type="submit" class="w-max btn-primary mx-auto">Log In</button>
        <p class="text-gray-500">or</p>
        <a href="<?php echo link; ?>signup" class="w-max btn-primary mx-auto ">Sign Up</a>
    </div>
        </form>
    </section>

<?php
}
?>