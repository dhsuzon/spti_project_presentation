<?php 
require_once "./config/db.php";

?>

<?php
$gallery_query ="SELECT * FROM galleries";
$gallery_result = mysqli_query($conn,$gallery_query);

?>
<?php if(mysqli_num_rows($gallery_result)>0):?>
<?php while($row_gallery = mysqli_fetch_assoc($gallery_result)): ?>
<div class="col-sm-12 col-md-6 col-lg-6">
    <div class="image_container">
        <img src="./images/gallery/<?php echo $row_gallery["gallery_image"] ?>" class="img-fluid image-hover_effect"
            alt="this gellary image_1">
    </div>
</div>
<?php endwhile; ?>
<?php else : ?>
<div class="col-12 text-center">
    <p class="text-muted">No gallery images found.</p>
</div>
<?php endif; ?>