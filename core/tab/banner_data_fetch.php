<?php 
   
    if (!isset($_SESSION['admin_user'])) {
    
    header("Location: ../../login.php"); 
    exit();
}?>
<?php

    $sql = "SELECT * FROM banners ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    $sl = 1;

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
    ?>
<tr>
    <td class="align-middle"><?php echo $sl++; ?></td>
    <td class="align-middle">
        <img src="images/banners/<?php echo $row['banner_image']; ?>" alt="Banner" class="img-thumbnail shadow-sm"
            style="width: 150px; height: 70px; object-fit: cover;">
    </td>
    <td class="align-middle">
        <span class="font-weight-bold text-dark"><?php echo htmlspecialchars($row['banner_title']); ?></span>
    </td>
    <td class="text-center align-middle">
        <div class="btn-group">
            <button class="btn btn-sm btn-info text-white edit-banner-btn" data-bs-toggle="modal"
                data-bs-target="#bannerModal" data-id="<?php echo $row['id']; ?>"
                data-title="<?php echo $row['banner_title']; ?>" data-image="<?php echo $row['banner_image']; ?>">
                <i class="fas fa-edit"></i>
            </button>

            <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=banners"
                class="btn btn-sm btn-danger ml-1"
                onclick="return confirm('Are you sure you want to delete this banner?')">
                <i class="fas fa-trash"></i>
            </a>
        </div>
    </td>
</tr>
<?php 
        } 
    } else {
        echo "<tr><td colspan='4' class='text-center text-muted py-4'>No banners found.</td></tr>";
    }
    ?>