<?php
$ujaquery = mysqli_query($db, "SELECT * FROM vcaf_users");
$mops = array("Bank", "Cash", "eSewa", "Khalti", "IMEpay", "Others");
?>

<script>
    var title = "Add Transaction";
    $("#title").html(title);
</script>

<main class="w-full h-full lg:flex lg:justify-center lg:items-center">
    <form action="<?php echo link; ?>components/admin/process.php" method="post" class="w-full lg:w-4/12">
        <?php include './components/titlebar.php'; ?>
        <div class="select" tabindex="1" id="uja">
            <input class="selectopt" name="tuser" type="radio" id="opt0" value="invalid" checked>
            <label for="opt0" class="option" id="selectuser">Select an user</label>
            <?php foreach ($ujaquery as $users) : ?>
                <?php if ($users['uname'] === "admin") {
                    continue;
                }; ?>
                <input class="selectopt" name="tuser" type="radio" id="opt<?php echo $users['ID']; ?>" value="<?php echo $users['uname'] ?>">
                <label for="opt<?php echo $users['ID']; ?>" class="option"><?php echo $users['uname']; ?></label>
            <?php endforeach; ?>
            <script>
                $('.select').click(function() {
                    $('#selectuser').hide();
                })
            </script>
        </div>
        <div class="flex items-center gap-2">
            <label for="transdate" class="text-right">Transaction Date: </label>
            <input type="date" name="transdate" id="transdate" required class="text-2xl">
        </div>
        <fieldset class="target:animate-pulse target:bg-red-500/20" id="mop">
            <script>
                setTimeout(function() {
                $('#mop').removeClass('target:animate-pulse');
                <?php unset($_SESSION['error']); ?>
            }, 3800);
            </script>
            <legend>Mode of Payment: </legend>
            <div class="grid grid-cols-3 gap-4">
                <?php foreach ($mops as $mop) : ?>
                    <div class="flex gap-2">
                        <input class="w-3" type="radio" name="mop" id="<?php echo $mop; ?>" value="<?php echo $mop; ?>">
                        <label for="<?php echo $mop; ?>"><?php echo $mop; ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </fieldset>

        <input type="text" name="rrn" id="rrn" placeholder="Retrieval Reference Number" autocomplete="off" required>
        <input type="text" name="transid" id="transid" placeholder="Transaction id (Optional)" autocomplete="off">
        <div class="relative flex">
            <p class="absolute bottom-1.5 font-extrabold">रू</p>
            <input type="number" name="amt" id="amt" placeholder="Amount" autocomplete="off" class="appearance-none ml-5" required>
        </div>
        
        <div class="flex items-center gap-4">
            <input class="w-4 ring-0 border-none outline-none focus:ring-0 focus:border-0 focus:outline-none smooth" type="checkbox" name="verify" id="verify" value="VERIFIED" required>
            <label for="verify">I hereby declair that all the information above is correct and I declair it to be verified.</label>
        </div>

        <button type="submit" class="btn-primary w-max mx-auto">Submit</button>
    </form>
</main>