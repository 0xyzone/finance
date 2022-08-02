<?php
include "../includes/header.php";
?>
<script>
    var title = "Signup - Finance";
    $("#title").html(title);
</script>
<section class="signup fadeInTop">
    <div class="font-bold text-white text-6xl mb-10">Sign Up</div>
    <form action="signup.php" method="POST" id="signup" class="w-full">
        <input type="text" name="uname" id="uname" placeholder="Username" autofocus="on" required>
        <input type="email" name="email" id="email" placeholder="Email Address" required>
        <input type="tel" name="tel" id="tel" placeholder="Contact No." required>
        <div class="relative w-full">
            <input type="password" name="pw" id="pw" placeholder="Password" required class="w-full z-0">
            <a href="javascript:void(0)" class="showhide" id="showhide"><i class="fa-solid absolute right-1 fa-eye" id="eye"></i></a>
        </div>
        <div class="flex mx-auto gap-2 items-center mt-2">
            <button for="signup" type="submit" class="w-max btn-primary mx-auto">Sign Up</button>
            <p class="text-gray-500">or</p>
            <a href="<?php echo link; ?>login" class="w-max btn-primary mx-auto ">Log In</a>
        </div>
    </form>
    <script>
        $('#showhide').click(function() {
            // alert("Handler for .click() called.");
            if ($('#pw').attr('type') == "password") {
                $('#pw').attr('type', 'text');
                $('#eye').removeClass('fa-eye');
                $('#eye').addClass('fa-eye-slash');
            } else {
                $('#pw').attr('type', 'password');
                $('#eye').removeClass('fa-eye-slash');
                $('#eye').addClass('fa-eye');
            }
        });
    </script>
</section>