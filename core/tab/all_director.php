<?php
require_once "./config/db.php";
    
    $director_query = "SELECT * FROM author_members WHERE member_role = 'director' AND status = 1 ORDER BY id ASC";
    $d_result = mysqli_query($conn, $director_query);
    ?>

<?php while($director = mysqli_fetch_assoc($d_result)): ?>
<div class="col-sm-12 col-md-6">
    <h5 class="committee_info_text py-1 ps-3">Director</h5>
    <div class="card mb-3 rounded-0" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <img src="./images/authors/<?php echo $director['image_file']; ?>" class="img-fluid" alt="Director">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $director['name']; ?></h5>
                    <p class="card-text text-muted">
                        <?php echo $director['designation']; ?> <br>
                        <?php echo $director['institution']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>