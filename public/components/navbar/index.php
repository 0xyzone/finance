<?php
include 'menuvars.php';
?>

<div class="w-16 h-auto bg-slate-500 flex flex-col justify-between py-3 gap-2 fixed top-0 bottom-0 z-10">
    <div class="flex flex-col gap-2">
        <?php foreach($menuitems as $menu): ?>
            
        <a href="<?php echo $menu['link']; ?>" class="navbtn"><?php echo $menu['icon']; ?></a>
        <?php endforeach; ?>
        
    </div>
    <div class="flex flex-col gap-2">
        <a href="<?php echo link ; ?>logout.php" class="navbtn" onclick="return confirm('Are you sure you want to logout?')"><i class="fa-solid fa-power-off"></i></a>
    </div>
</div>