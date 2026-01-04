<?php 
include_once __DIR__.'/core/header.php'; 
include_once __DIR__."/core/tab/department_forntend_data_fetch.php";
?>


<main>
    <div class="container">
        <div class="container-fluid bg-secondary bg-opacity-25 my-2 py-2 ">
            <marquee scrollamount="7" scrolldelay="5" direction="left" onmouseover="this.stop()"
                onmouseout="this.start()">
                <a href="./admission.php" class="h4 text-decoration-none">
                    <i class="fas fa-angle-double-right"> </i> Admission is going on......
                </a>
            </marquee>
        </div>

        <h4 class="committee_info_text py-2 ps-3 kalpurush"><?php echo $row['dept_name']; ?></h4>

        <div class="row">
            <?php include_once __DIR__."/core/tab/department_fornted_data.php"; ?>

            <h4 class="message_info_text pb-2 ps-3 mt-3">Campus Facilities</h4>
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

<?php include_once  __DIR__.'/core/footer.php'; ?>