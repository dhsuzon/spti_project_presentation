<?php 

if (!isset($_SESSION['admin_user'])) {
    header("Location: ../../login.php"); 
    exit();
}


$sql = "SELECT * FROM galleries ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td class="align-middle">
        <span class="font-weight-bold text-dark"><?php echo htmlspecialchars($row['id']); ?></span>
    </td>

    <td class="align-middle">
        <span class="font-weight-bold text-dark"><?php echo htmlspecialchars($row['caption']); ?></span>
    </td>

    <td class="align-middler">
        <img src="images/gallery/<?php echo $row['gallery_image']; ?>" alt="gallery_image"
            class="img-thumbnail shadow-sm" style="width: 120px; height: 70px; object-fit: cover;">
    </td>

    <td class="text-center align-middle">
        <div class="btn-group">
            <button class="btn btn-sm btn-info text-white edit_gallery_btn" data-bs-toggle="modal"
                data-bs-target="#galleryModal" data-id="<?php echo $row['id']; ?>"
                data-caption="<?php echo ($row['caption']); ?>" data-image="<?php echo $row['gallery_image']; ?>">
                <i class="fas fa-edit"></i>
            </button>

            <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=galleries"
                class="btn btn-sm btn-danger ml-1"
                onclick="return confirm('Are you sure you want to delete this gallery?')">
                <i class="fas fa-trash"></i>
            </a>
        </div>
    </td>
</tr>
<?php 
    } 
} else {
    echo "<tr><td colspan='4' class='text-center text-muted py-4'>No gallery data found.</td></tr>";
}
?>