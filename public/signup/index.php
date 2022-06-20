<?php
include "../includes/header.php";
?>
<section class="signup">
    <div class="text-2xl font-bold text-white">Sign Up</div>
    <form action="signup.php" method="POST" id="signup">
    <input type="text" name="uname" id="uname" placeholder="Username" autofocus="on" required>
    <input type="email" name="email" id="email" placeholder="Email Address" required>
    <input type="tel" name="tel" id="tel" placeholder="Contact No." required>
    <input type="password" name="pw" id="pw" placeholder="Password" required>
    <div class="flex mx-auto gap-2 items-center mt-2">
        <button for="signup" type="submit" class="w-max btn-primary mx-auto">Sign Up</button>
        <p class="text-gray-500">or</p>
        <a href="<?php echo link; ?>login" class="w-max btn-primary mx-auto ">Log In</a>
    </div>
</form>
</section>
