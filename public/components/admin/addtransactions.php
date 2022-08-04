<?php
$ujaquery = mysqli_query($db, "SELECT * FROM vcaf_users");
$mops = array("Bank", "Cash", "eSewa", "Khalti", "IMEpay", "Others");
if($_POST){
    date_default_timezone_set('Asia/Kathmandu');
    $date = date('Y-m-d H:i:s');
    $user = $_POST['tuser'];
    $transdate = $_POST['transdate'];
    
}
?>

<script>
    var title = "Add Transaction - Finance";
    $("#title").html(title);
</script>

<main class="w-full h-full flex justify-center">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="w-full lg:w-4/12">
        <div class="select" tabindex="1">
            <input class="selectopt" name="tuser" type="radio" id="opt0" value="invalid" checked>
            <label for="opt0" class="option">Select an user</label>
            <?php foreach ($ujaquery as $users) : ?>
                <?php if ($users['uname'] === "admin") {
                    continue;
                }; ?>
                <input class="selectopt" name="tuser" type="radio" id="opt<?php echo $users['ID']; ?>" value="<?php echo $users['uname'] ?>">
                <label for="opt<?php echo $users['ID']; ?>" class="option"><?php echo $users['uname']; ?></label>
            <?php endforeach; ?>
        </div>
        <input type="date" name="transdate" id="transdate">
        <div class="grid grid-cols-3 gap-4">
            <?php foreach ($mops as $mop) : ?>
                <div class="flex gap-2">
                    <input class="w-3" type="radio" name="mop" id="<?php echo $mop; ?>" value="<?php echo $mop; ?>">
                    <label for="<?php echo $mop; ?>"><?php echo $mop; ?></label>
                </div>
            <?php endforeach; ?>
        </div>
        <input type="text" name="rrn" id="rrn" placeholder="Retrieval Reference Number">
        <input type="text" name="transid" id="transid" placeholder="Transaction id (Optional)">
        <div class="flex gap-4">
            <input class="w-3" type="checkbox" name="verify" id="verify" value="verified">
            <label for="verify">I hereby declair that all the information above is correct and I declair it to be verified.</label>
        </div>
        
        <button type="submit" class="btn-primary w-max mx-auto">Submit</button>
    </form>
</main>