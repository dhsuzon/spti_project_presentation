<?php 
require_once "./config/db.php";
$scholar_query ="SELECT * FROM scholarships ";
$scholar_result = mysqli_query($conn,$scholar_query);
?>

<?php if(mysqli_num_rows($scholar_result)>0): ?>

<?php while($scholar_row=mysqli_fetch_assoc($scholar_result)):?>
<div class="col-sm-6 col-md-4 col-lg-4 pt-3">
    <div class="card h-100 kalpurush text-center shadow" style="text-align: center;">
        <div class="card-body">
            <h2 class="card-title text-danger"><?php echo $scholar_row['scholor_title'] ;?></h2>
            <p class="card-text h5"><?php echo $scholar_row['scholor_des'] ;?> </p>
        </div>
    </div>
</div>

<?php endwhile;?>

<?php else: ?>

<p>no scholarships found</p>

<?php  endif ;?>