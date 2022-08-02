<?php if(!isset($_GET['page'])) : ?>
    HomePage
<?php else : ?>
    <?php if($_GET['page'] == "dashboard"){
        include 'dashboard.php';
    }elseif($_GET['page'] == "transactions"){
        include 'addtransactions.php';

    };
    ?>
<?php endif; ?>