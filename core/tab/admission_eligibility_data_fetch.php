<?php 
$eligibility = mysqli_query($conn, "SELECT * FROM admission_details WHERE category='eligibility'");
while($row = mysqli_fetch_assoc($eligibility)): ?>
<p class="kalpurush h4 pb-1">
    <i class="fa-solid fa-circle-arrow-right" style="color: #4056a1;"></i>
    <?php echo $row['info_text']; ?>
</p>
<?php endwhile; ?>