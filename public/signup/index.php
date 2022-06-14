<?php
include "../includes/header.php"
?>
<section class="signup">
    <div class="text-2xl font-bold text-white">Sign Up</div>
    <form action="signup.php" method="POST" id="signup" autocomplete="off">
    <input type="text" name="uname" id="uname" placeholder="Username" autocomplete="off" required>
    <input type="email" name="email" id="email" placeholder="Email Address" required>
    <input type="tel" name="tel" id="tel" placeholder="Contact No." required>
    <input type="password" name="pw" id="pw" placeholder="Password" required>
    <button for="signup" type="submit" class="w-max btn-primary mx-auto mt-2">Sign Up</button>
</form>
</section>
