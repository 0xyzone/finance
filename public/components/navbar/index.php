<?php
include 'menuvars.php';
?>

<div class="w-16 h-auto bg-stone-900/50 md:flex flex-col justify-between gap-2 fixed top-0 bottom-0 z-10 hidden">
    <div class="flex flex-col gap-4">
        <div class="bg-gray-50 w-full h-max rounded-b-full shadow-lg">
            <a href="<?php echo link; ?>"><img src="<?php echo link; ?>img/logo.gif" alt="logo"></a>
        </div>
        <?php foreach ($menuitems as $menu) : ?>

            <a href="<?php echo $menu['link']; ?>" class="navbtn"><?php echo $menu['icon']; ?></a>
        <?php endforeach; ?>

    </div>
    <div class="flex flex-col gap-2 bg-gray-50 w-full h-16 rounded-t-full shadow-lg justify-center items-center">
        <a href="<?php echo link; ?>logout.php" class="text-stone-900 text-2xl" onclick="return confirm('Are you sure you want to logout?')"><i class="fa-solid fa-power-off"></i></a>
    </div>
</div>
<div class="w-full h-16 bg-stone-900/50 flex justify-between items-center gap-2 top-0 z-10 md:hidden sticky">
    <div class="flex gap-2 w-full items-center">
        <div class="w-12 bg-gray-50 h-max rounded-r-full shadow-lg">
            <a href="<?php echo link; ?>"><img src="<?php echo link; ?>img/logo.gif" alt="logo"></a>
        </div>
        <div class="flex gap-2 w-4/12 overflow-auto">
            <?php foreach ($menuitems as $menu) : ?>
                <a href="<?php echo $menu['link']; ?>" class="navbtn"><?php echo $menu['icon']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 bg-gray-50 w-16 rounded-l-full shadow-lg justify-center items-center">
        <a href="<?php echo link; ?>logout.php" class="text-stone-900 text-2xl" onclick="return confirm('Are you sure you want to logout?')"><i class="fa-solid fa-power-off"></i></a>
    </div>
</div>