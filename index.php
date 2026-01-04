<?php require_once __DIR__.'/core/header.php'; 


?>

<!-- header part end -->

<!-- main part start -->
<main>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <?php include_once __DIR__."/core/tab/banner_fornted_data.php"; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-fluid bg-secondary bg-opacity-25 my-2 py-2 ">
            <marquee scrollamount="7" scrolldelay="5" direction="left" onmouseover="this.stop()"
                onmouseout="this.start()">

                <a href="./admission.html" class="h4 text-decoration-none">

                    <i class="fas fa-angle-double-right"> </i> Admission is going on......</li>
                </a>
            </marquee>
        </div>

        <div class="w-100">
            <div class="row  g-4">
                <!-- managing commitee mark up and desgin -->
                <?php  include_once __DIR__."/core/tab/director_fornted_data.php";?>

                <!-- principal and campus historey markup and  desgin -->
                <div class="col-sm-12 col-md-8">
                    <!-- principal section markup and desgin  -->
                    <?php  include_once __DIR__."/core/tab/principal_fornted_data.php";?>
                    <!-- campus historey markup and desgin -->
                    <h4 class="message_info_text pb-2 ps-3 mt-3">History of Campus</h4>
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-6 col-lg-6">

                            <p class="card-text" style="text-align: justify; padding: 5px ">
                                Sylhet Professional Technical Institute (SPTI) is a private engineering institute
                                affiliated to Bangladesh Technical Education Board (BTEB), situated at Sylhet
                                Municipality area. It consists of 3 academic departments (Civil, Computer and
                                Electrical) with a focus on education in engineering. This institute code is 61081 &
                                EIIN is 136028.
                            </p>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <video style="width:100%" controls>
                                <source src="image/" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <!-- gellery image markup and desgin -->
                    <h4 class="message_info_text pb-2 ps-3">Gallery</h4>
                    <div class="row g-4 ">
                        <?php include_once __DIR__."/core/tab/gallery_fornted_data.php"; ?>

                    </div>
                    <!-- campus Facilites markup and desgin -->
                    <h4 class="message_info_text pb-2 ps-3 mt-3">Campus Facilities</h4>
                    <div class="row g-4 ">



                        <?php include_once __DIR__.'/core/campus_facilities.php'; ?>

                    </div>

                </div>
                <section>
                    <!-- notice board desgin -->
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mt-3">
                            <h4 class="committee_info_text py-1 ps-3">Notice Board</h4>
                            <div class="border">
                                <marquee behavior="scroll" class="h-auto" scrollamount="3" direction="up"
                                    scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()">
                                    <ul class="list-unstyled ps-3 py-5 my-5">
                                        <hr class="my-1">
                                        <li class="">
                                            <a href="/" class="text-decoration-none" style="color:#4056A1;"><small>No
                                                    Data Found</small></a>
                                            <hr class="my-1">
                                        </li>
                                    </ul>
                                </marquee>
                                <hr class="my-1">
                                <a href="./notice.php"
                                    class="btn btn-outline-secondary m-3  fw-bolder d-block px-auto text-center">All
                                    Notice</a>
                            </div>
                        </div>
                        <!-- campus location and google calender -->
                        <div class="col-sm-12 col-md-8">
                            <h4 class="message_info_text pb-2 ps-3 mt-3">Campus Location</h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924.008242164018!2d91.86887989091616!3d24.901759289806968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750558f82db4c7f%3A0x13781495e1374374!2sSylhet+Professional+Technical+Institute+(SPTI)!5e1!3m2!1sen!2sbd!4v1563786584743!5m2!1sen!2sbd"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


                        </div>
                    </div>
                </section>
                <!-- uselfull link section -->
                <section>
                    <div class="row">
                        <div class="col-md-4">

                            <?php include_once __DIR__.'/core/usefull_link.php'; ?>
                        </div>

                        <div class="col-md-8">
                            <h4 class="message_info_text pb-2 ps-3 mt-3">Calendar</h4>
                            <iframe
                                src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=7&amp;bgcolor=%23E67C73&amp;ctz=Asia%2FDhaka&amp;showTitle=1&amp;showCalendars=0&amp;showPrint=0&amp;showNav=1&amp;showTabs=0&amp;src=ZW4uYmQjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%230B8043&amp;showTz=0&amp;title=SPTI&amp;mode=MONTH"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>

            </div>
            <!-- contact us section -->
            <section>
                <div class="row">
                    <div class="col-md-12 mt-3 w-100">
                        <?php  include_once __DIR__.'/core/contact_us.php'; ?>
                    </div>
            </section>

        </div>
    </div>







</main>
<!-- main part end -->
<?php require_once __DIR__.'/core/footer.php'; ?>