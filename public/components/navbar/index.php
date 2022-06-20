<?php
include 'menuvars.php';
?>

<div class="w-16 h-full bg-slate-500 flex flex-col justify-between py-3 gap-2">
    <div class="flex flex-col gap-2">
        <a href="#" class="navbtn"><i class="fa-solid fa-chart-line"></i></a>
        <a href="#" class="navbtn"><i class="fa-solid fa-chart-line"></i></a>
        <a href="#" class="navbtn"><i class="fa-solid fa-chart-line"></i></a>
    </div>
    <div class="flex flex-col gap-2">
        <a href="<?php echo link ; ?>logout.php" class="navbtn" onclick="confirm('Are you sure you want to logout?')"><i class="fa-solid fa-power-off"></i></a>
    </div>
</div>