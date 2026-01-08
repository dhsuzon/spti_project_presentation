<?php include_once __DIR__.'/core/header.php'; 

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
        <!-- managing committee title  -->
        <h4 class="committee_info_text py-1 ps-3 text-center">Managing Committee</h4>


        <!-- director and chairman image -->


        <div class="row g-2">

            <div class="col-sm-12 col-md-6">
                <h5 class="committee_info_text py-1 ps-3">Chairman</h5>
                <div class="card mb-3 rounded-0 border-0"
                    style="max-width: 540px; min-height: 160px; background: #f8f9fa;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <p class="text-muted mb-0">Chairman Info Pending</p>
                    </div>
                </div>
            </div>

            <?php include_once __DIR__."/core/tab/all_director.php"; ?>
        </div>
        <!-- end director and chairman image -->

        <!-- campus facility title  -->
        <h4 class="message_info_text pb-2 ps-3 mt-3">Campus Facilities</h4>
        <!-- campus facility logo  -->
        <div class="row g-4 ">
            <?php include_once __DIR__.'/core/campus_facilities.php'; ?>

        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <?php include_once __DIR__.'/core/usefull_link.php'; ?>
            </div>

            <div class="col-md-6 col-ms-12">
                <?php include_once __DIR__.'/core/contact_us.php'; ?>

            </div>
        </div>
    </div>



</main>
<!-- main part end -->
<?php include_once __DIR__.'/core/footer.php'; ?>