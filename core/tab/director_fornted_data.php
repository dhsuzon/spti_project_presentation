<?php 
  require_once "./config/db.php";
   $director_query = "SELECT * FROM author_members WHERE member_role = 'director' AND status = 1 ORDER BY id ASC";
    $director_result = mysqli_query($conn, $director_query);

?>


<div class="col-sm-12 col-md-4">
    <h4 class="committee_info_text py-1 ps-3">Managing Committee</h4>
    <div class="row g-2">
        <?php while ($director = mysqli_fetch_assoc($director_result)): ?>
        <div class="col-sm-6 col-md-12 col-12">
            <h4 class="committee_info_text py-1 ps-3 mt-3 text-capitalize"><?php echo $director['member_role']; ?></h4>
            <div class="card" style="max-width:540px;">
                <img src="./images/authors/<?php echo $director['image_file']; ?>" class="card-image-top"
                    alt="<?php echo $director['name']; ?>">
                <div class="card-body fs-5">
                    <h5 class="card-title"><?php echo $director['name']; ?></h5>
                    <small class="card-text text-muted"><?php echo $director['designation']; ?></small><br>
                    <small class="card-text text-muted"><?php echo $director['institution']; ?></small>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>