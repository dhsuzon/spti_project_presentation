<?php include_once __DIR__.'/core/header.php'; 
require_once __DIR__."/config/db.php";

?>
<!-- header part end -->

<main>
    <!-- all element container -->
    <div class="container">
        <!-- marque slideing -->
        <div class="container-fluid bg-secondary bg-opacity-25 my-2 py-2 ">
            <marquee scrollamount="7" scrolldelay="5" direction="left" onmouseover="this.stop()"
                onmouseout="this.start()">

                <a href="./admission.php" class="h4 text-decoration-none">

                    <i class="fas fa-angle-double-right"> </i> Admission is going on......</li>
                </a>
            </marquee>
        </div>


        <div class="row">

            <!----Start College Staffs---->
            <div class="col-md-12">
                <h4 class="title-bar">Our Faculty Members</h4>

                <div class="row">

                    <!-- 01 -->
                    <div class="row">

                        <?php include_once __DIR__."/core/tab/teacher_fornted_data.php"; ?>

                        <!-- campus facility title  -->
                        <h4 class="message_info_text pb-2 ps-3 mt-3">Campus Facilities</h4>
                        <!-- campus facility logo  -->
                        <div class="row g-4 ">
                            <?php include_once __DIR__.'/core/campus_facilities.php'; ?>

                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <?php include_once  __DIR__.'/core/usefull_link.php'; ?>
                            </div>

                            <div class="col-md-6 col-ms-12">
                                <?php include_once __DIR__.'/core/contact_us.php'; ?>

                            </div>
                        </div>
                    </div>



</main>
<!-- main part end -->

<?php include_once __DIR__.'/core/footer.php'; ?>