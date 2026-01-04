<div class="col-sm-12 col-md-4">
    <h4 class="committee_info_text py-2 ps-3">Head Of The Department</h4>
    <div class="card">
        <img src="./images/departments/<?php echo $row['head_image']; ?>" alt="<?php echo $row['head_name']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['head_name']; ?></h5>
            <p class="card-text text-muted">
                <strong>E-mail :</strong> <?php echo $row['head_email']; ?> <br>
                <strong>Contact :</strong> <?php echo $row['head_contact']; ?>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-8">
    <h4 class="ps-3 kalpurush text-center fw-bold">ভূমিকা</h4>
    <hr>
    <div class="d-flex kalpurush">
        <img src="./images/departments/<?php echo $row['dept_icon']; ?>" class="img-fluid"
            style="width: 200px; height: 200px;">
        <p class="text-justify kalpurush">
            <?php echo $row['intro_text']; ?>
        </p>
    </div>

    <h4 class="ps-3 kalpurush text-center fw-bold">চাকরির ক্ষেত্র</h4>
    <hr>
    <div class="d-flex kalpurush">
        <p class="text-justify kalpurush">
            <?php echo $row['job_sector']; ?>
        </p>
        <img src="./images/departments/<?php echo $row['job_icon']; ?>" class="img-fluid"
            style="width: 200px; height: 200px;">
    </div>

    <h4 class="ps-3 kalpurush text-center fw-bold">শিক্ষা এবং পরীক্ষা পদ্ধতি</h4>
    <hr>
    <div class="d-flex kalpurush">
        <img src="./images/departments/<?php echo $row['exam_icon']; ?>" class="img-fluid"
            style="width: 200px; height: 200px;">
        <p class="text-justify kalpurush">
            <?php echo $row['exam_system']; ?>
        </p>
    </div>
</div>
</div>