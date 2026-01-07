<?php include 'core/header.php'; ?>
<!-- header part end -->

<main>
    <!-- all element container -->
    <div class="container">
        <!-- admission header -->

        <div class="container">

            <div class="row pt-3">
                <?php include_once __DIR__."/core/tab/admission_fornted_heading_data_fetch.php"; ?>


                <div class="col-sm-6 pt-5">
                    <h3 class=" invisible"> </h3>
                    <img src="./images/banners/banner_1767331561.jpg " width="100%"
                        style="filter: drop-shadow(0 0 0.75rem #aaa);" class=" d-flex mx-auto"
                        alt="this is spti banner image">
                </div>

                <div class="col-sm-6 pt-5">
                    <h3 class="kalpurush text-center fw-bolder mb-4" style="color: #4056a1; font-weight: bold;">আমাদের
                        কোর্স
                        সমুহ: </h3>
                    <div class="row row-eq-height justify-content-center align-items-center g-2">


                        <?php  include_once __DIR__."/core/tab/technology_fornted_data.php";?>
                    </div>


                </div>

            </div>

            <!-- admission offers -->

            <div class="" style="background-color:#F4FCFF">
                <div class="container">
                    <div class="row  gx-5 my-5 py-5 justify-content-center">
                        <div class="col-12 ">
                            <h2 class=" kalpurush text-center pb-2" style="color: #4056a1; font-weight: bold;">বিশেষ
                                স্কলারশিপে
                                ভর্তি চলছে:</h2>
                        </div>


                        <?php  include_once __DIR__."/core/tab/admission_scholar_data_fetch.php";?>

                    </div>
                </div>
            </div>

            <!-- admission qualification  -->
            <div class="rwo mb-5">
                <div class="col-12">

                    <h2 class="text-center mb-4 kalpurush" style="color: #4056a1; font-weight: bold;">ভর্তির শিক্ষাগত
                        যোগ্যতা:</h2>
                    <div>

                        <?php include_once __DIR__."/core/tab/admission_eligibility_data_fetch.php"; ?>

                    </div>
                </div>

            </div>
            <!-- admission regulations  -->

            <div class="admission_regulations" style="background-color:#F4FCFF">
                <div class="container py-4">
                    <div class="rwo mb-5">
                        <div class="col-12">
                            <h2 class="text-center mb-4 kalpurush" style="color: #4056a1; font-weight: bold;">ভর্তির
                                নিয়মাবলী:
                            </h2>
                            <div>
                                <?php include_once __DIR__."/core/tab/admission_rules_data_fetch.php"; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- admission required document  -->
            <div class="rwo mb-5">
                <div class="col-12">
                    <h2 class="text-center mb-4 kalpurush" style="color: #4056a1; font-weight: bold;">ভর্তির জন্য যেসব
                        ডকুমেন্ট প্রয়োজন:
                    </h2>
                    <div>
                        <?php include_once __DIR__."/core/tab/admission_documents_data_fetch.php"; ?>
                    </div>
                </div>
                <!-- campus facility title  -->
                <h4 class="message_info_text pb-2 ps-3 mt-3">Campus Facilities</h4>
                <!-- campus facility logo  -->
                <div class="row g-4 ">
                    <?php include_once 'core/campus_facilities.php'; ?>

                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <?php include_once 'core/usefull_link.php'; ?>
                    </div>

                    <div class="col-md-6 col-ms-12">
                        <?php include_once 'core/contact_us.php'; ?>

                    </div>
                </div>
            </div>



</main>
<!-- main part end -->
<?php include 'core/footer.php'; ?>