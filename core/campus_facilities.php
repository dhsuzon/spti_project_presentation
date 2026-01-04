<?php 
require_once "./config/db.php";
$campus_facilities = "SELECT icon,title FROM Campus_Facilitie";

$campus_facilities_result = mysqli_query($conn, $campus_facilities);

?>

<?php if(mysqli_num_rows($campus_facilities_result)>0): ?>

<?php while($cam_fac_row=mysqli_fetch_assoc($campus_facilities_result)): ?>

<div class="col-sm-12 col-md-4">
    <div class="card" style="text-align:center;">
        <img src="./images/logo/<?php echo $cam_fac_row['icon']; ?>" class="img-fluid"
            style="width:30%; margin: 0px auto;" alt="this lab logo">
        <strong><?php echo $cam_fac_row['title'];?></strong>
    </div>
</div>
<?php endwhile; ?>

<?php else : ?>

<p>not facilites available</p>
<?php endif ; ?>