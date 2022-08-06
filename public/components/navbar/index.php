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
<div class="w-full h-16 flex items-center gap-2 z-10 md:hidden fixed bottom-0 border-b-2">
    <div class="w-full h-20 -mb-5 flex-none absolute bg-stone-800 blur z-0">

    </div>
    <div class="flex gap-2 w-full items-center z-10">
        <div class="w-16 bg-gray-50 rounded-r-2xl shadow-lg">
            <a href="<?php echo link; ?>"><img src="<?php echo link; ?>img/logo.gif" alt="logo"></a>
        </div>
        <div class="flex gap-2 w-6/12 overflow-x-auto overflow-y-hidden mx-auto scrollbar-thin scrollbar-thumb-translate scrollbar-track-lime-9 rounded-full p-2 border-2 border-lime-700 mb-0.5 bg-lime-700">
            <?php foreach ($menuitems as $menu) : ?>
                <a href="<?php echo $menu['link']; ?>" class="navbtn2"><?php echo $menu['icon']; ?></a>
            <?php endforeach; ?>
        </div>
        <div class="flex flex-none gap-2 bg-gray-50 w-16 h-16 rounded-l-2xl shadow-lg justify-center items-center">
            <a href="<?php echo link; ?>logout.php" class="text-stone-900 text-2xl" onclick="return confirm('Are you sure you want to logout?')"><i class="fa-solid fa-power-off"></i></a>
        </div>
    </div>
   
</div>