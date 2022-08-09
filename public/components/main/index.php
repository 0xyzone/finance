<?php if(isset($_GET['page'])):?>
    <?php if($_GET['page'] == "dashboard"): ?>
    <script>
        var title = "Dashboard";
        $("#title").html(title);
    </script>
    <?php endif; ?>
<?php else: ?>

    <script>
        var title = "Homepage";
        $("#title").html(title);
    </script>
    <main class="w-full grid pb-32">
        <section class="w-full 2xl:w-11/12 h-max grid grid-cols-1 2xl:grid-cols-4 justify-center my-10 fadeInTop gap-4">
            
                <div class="statcards">
                    <div class="statcont">
                        <i class="fa-thin fa-2x fa-briefcase"></i>
                        <p>Total Investment</p>
                    </div>
                    <div class="statnum">
                        <span>0000</span>
                    </div>
                </div>
                <div class="statcards">
                    <div class="statcont">
                        <i class="fa-thin fa-2x fa-briefcase"></i>
                        <p>Own Total Savings</p>
                    </div>
                    <div class="statnum">
                        <span>0000</span>
                    </div>
                </div>
                <div class="statcards">
                    <div class="statcont">
                        <i class="fa-thin fa-2x fa-briefcase"></i>
                        <p>Towards Vidanta</p>
                    </div>
                    <div class="statnum">
                        <span>0000</span>
                    </div>
                </div>
                <div class="statcards">
                    <div class="statcont">
                        <i class="fa-thin fa-2x fa-briefcase"></i>
                        <p>Highest Investment</p>
                    </div>

                    <div class="statnum">
                        <span>0000</span>
                    </div>
                </div>
            
        </section>
        <section class="w-full h-max lg:container mx-auto">
            <div class="w-full px-10 py-4 bg-gray-500">
                something
            </div>
        </section>
    </main>
<?php endif; ?>