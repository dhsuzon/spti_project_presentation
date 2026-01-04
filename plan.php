<?php include_once __DIR__.'/core/header.php'; ?>
<!-- header part end -->

<main>
    <!-- all element container -->
    <div class="container">
        <!-- marque slideing -->
        <div class="container-fluid bg-secondary bg-opacity-25 my-2 py-2 ">
            <marquee scrollamount="7" scrolldelay="5" direction="left" onmouseover="this.stop()"
                onmouseout="this.start()">

                <a href="./admission.html" class="h4 text-decoration-none">

                    <i class="fas fa-angle-double-right"> </i> Admission is going on......</li>
                </a>
            </marquee>
        </div>
        <!-- vision and mission title  -->
        <h4 class="committee_info_text py-1 ps-3">Vision & Mission</h4>

        <!-- institute history title  -->
        <h3 class="text-center fw-bold py-2">Institute History</h3>
        <hr>

        <div class="row">
            <div class=" col-6 col-md-3">
                <img src="./images/logo/spti_logo.png" alt=" this is spti logo " class="img-fluid  " />
            </div>
            <div class=" col-6 col-md-9 text-justify">
                <p> Sylhet Professional Technical Institute (SPTI) is a private engineering institute affiliated to
                    Bangladesh Technical Education Board (BTEB), situated at Sylhet Municipality area. It consists of 3
                    academic departments (Civil, Computer and Electrical) with a focus on education in engineering. This
                    institute code is 61081 & EIIN is 136028</p>
            </div>
        </div>

        <!-- Mission title  -->
        <h3 class="text-center fw-bold py-2">Mission</h3>
        <hr>

        <div class="row">

            <div class=" col-6 col-md-9 text-justify">
                <p>1. To ensure that every Student of SPTI becomes an Achiever.<br>
                    2. To provide knowledge with academic excellence and to make our students professionals, so that
                    they chart out their own path of success and possess perfection in their efforts.<br>
                    3. To ensure students of all ability levels are well equipped to meet the challenges of education,
                    work and life.</p>
            </div>
            <div class=" col-6 col-md-3">
                <img src="./images/logo/mission.png" alt=" this is spti logo " class="img-fluid  " />
            </div>
        </div>



        <!-- Vission title  -->
        <h3 class="text-center fw-bold py-2">Vission</h3>
        <hr>

        <div class="row">
            <div class=" col-6 col-md-3">
                <img src="./images/logo/vission.png" alt=" this is spti logo " class="img-fluid  " />
            </div>
            <div class=" col-6 col-md-9 text-justify">
                <p> To develop SPTI as World Class education Centre and to impart Knowledge to our Students in an
                    ambience of Humanity, Wisdom, Intellect, Knowledge, Creativity & Innovation, in order to nurture
                    them to become Culturally and Ethically rich Professionals with bright future.</p>
            </div>
        </div>

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
                <?php include_once  __DIR__.'/core/contact_us.php'; ?>

            </div>
        </div>
    </div>



</main>
<!-- main part end -->


<?php include_once __DIR__.'/core/footer.php'; ?>