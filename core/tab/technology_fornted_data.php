<?php
$coureses = "SELECT * FROM courses ORDER BY id DESC"; 
$coureses_result = mysqli_query($conn, $coureses);
?>

<div class="row">
    <?php if($coureses_result && mysqli_num_rows($coureses_result) > 0): ?>

    <?php while($coures_row = mysqli_fetch_assoc($coureses_result)): ?>
    <div class="col-12 col-sm-12 col-lg-6 mb-4">
        <a href="department_details.php?id=<?php echo $coures_row['dept_id']; ?>" class="admissiom_ancor_desgin">
            <div class="card text-center shadow rounded-0 h-100">
                <img class="card-img-top rounded-0"
                    src="images/technology_image/<?php echo $coures_row['tech_image']; ?>"
                    alt="<?php echo $coures_row['tech_name']; ?>" style="height: 200px; object-fit: cover;" />

                <div class="card-body">
                    <h5 class="card-title"><?php echo $coures_row["tech_name"]; ?></h5>
                </div>
            </div>
        </a>
    </div>
    <?php endwhile; ?>

    <?php else: ?>
    <div class="col-12 text-center">
        <h2>No courses available</h2>
    </div>
    <?php endif; ?>
</div>