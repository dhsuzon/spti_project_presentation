<?php
require_once "./config/db.php";
        $admission_header_title = mysqli_query($conn, "SELECT info_text FROM admission_details WHERE category='header_title' ORDER BY id DESC LIMIT 1");
        $admission_header_title_result = mysqli_fetch_assoc($admission_header_title);
        $admission_header_des = mysqli_query($conn, "SELECT info_text FROM admission_details WHERE category='header_desc' ORDER BY id DESC LIMIT 1");
       $admission_header_des_result = mysqli_fetch_assoc($admission_header_des);
        ?>
<div class="col-12 kalpurush mt-4">
    <h1 class=" text-center" style="color: #4056a1; font-weight: bold; text-shadow: 2px 1px 1px #ee5253;">
        <?php echo $admission_header_title_result['info_text'] ?? "ভর্তি চলছে !! ভর্তি চলছে !! ভর্তি চলছে !!"; ?>
    </h1>



    <p class="text-center h4 px-5 pt-2">
        <?php echo $admission_header_des_result['info_text'] ?? "not data found  for this header title"; ?>
    </p>
    <hr>
</div>