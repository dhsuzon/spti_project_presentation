<?php 
require_once "./config/db.php";
$qurey = "SELECT * FROM banners ORDER BY id DESC";
$banner_result = mysqli_query($conn,$qurey);
        $i = 0;
        mysqli_data_seek($banner_result, 0); 
        while($indicator_row = mysqli_fetch_assoc($banner_result)){
            $active_class = ($i == 0) ? 'active' : '';
            echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" class="'.$active_class.'" aria-label="Slide '.($i+1).'"></button>';
            $i++;
        }
        ?>
</div>

<div class="carousel-inner">
    <?php 
        if(mysqli_num_rows($banner_result) > 0){
            mysqli_data_seek($banner_result, 0); 
            $counter = 0;
            while($row = mysqli_fetch_assoc($banner_result)){
        
                $active_status = ($counter == 0) ? 'active' : '';
        ?>
    <div class="carousel-item <?php echo $active_status; ?>">
        <img src="images/banners/<?php echo $row['banner_image']; ?>" class="d-block w-100"
            style="height: 450px; object-fit: cover;" alt="Banner Image">

        <div class="carousel-caption rounded-1 bg-dark bg-opacity-75 d-none d-md-block">
            <h5 class="kalpurush px-1"><?php echo $row['banner_title']; ?></h5>
        </div>
    </div>
    <?php 
                $counter++;
            }
        } else {
         
            echo '<div class="carousel-item active text-center p-5"><h5>No Banners Available</h5></div>';
        }
        ?>