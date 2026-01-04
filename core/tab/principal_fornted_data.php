<?php 
require_once "./config/db.php";
$principal_query = "SELECT * FROM author_members WHERE member_role = 'principal' AND status = 1 ORDER BY id DESC LIMIT 1";
$p_result = mysqli_query($conn, $principal_query);
?>


<h4 class="message_info_text py-1 ps-3">Message From Principal</h4>
<?php if($principal = mysqli_fetch_assoc($p_result)): ?>
<div class="row g-4">
    <div class="col-sm-12 col-md-12 col-lg-6">
        <img src="./images/authors/<?php echo $principal['image_file']; ?>" class="mt-3 img-fluid w-100"
            alt="principal image">
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6">
        <h5 class="mt-0 card-title">Welcome Message</h5>
        <div class="card-text" style="text-align: justify; padding: 5px ">
            <?php echo nl2br($principal['message'] ?? ''); ?>
            <p class="mt-3"> May the blessing of almighty Allah be upon with us.</p>
        </div>
        <div class="py-2">
            <h5><?php echo $principal['name']; ?></h5>
            <small>
                <?php echo $principal['designation']; ?> <br>
                <?php echo $principal['institution']; ?>
            </small>
        </div>
    </div>
</div>
<?php else: ?>
<p class="text-center py-5">Principal information not available.</p>
<?php endif; ?>