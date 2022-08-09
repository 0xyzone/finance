<?php if(!isset($_GET['page'])) : ?>
    HomePage
    <script>
        var title = "Homepage";
        $("#title").html(title);
    </script>
<?php else : ?>
    <?php if($_GET['page'] == "dashboard"){
        include 'dashboard.php';
    }elseif($_GET['page'] == "transactions"){
        include 'addtransactions.php';
    };
    ?>
<?php endif; ?>