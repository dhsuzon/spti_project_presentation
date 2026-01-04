<?php 
   
    require_once "./config/db.php";
    if (!isset($_SESSION['admin_user'])) {
    
    header("Location: ../../login.php"); 
    exit();
}?>
<?php

$sql = "SELECT * FROM notices ORDER BY notice_date DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td style="width: 15%;">
        <?php echo date('d-m-Y', strtotime($row['notice_date'])); ?>
    </td>

    <td>
        <span class="text-dark font-weight-bold"><?php echo htmlspecialchars($row['notice_title']); ?></span>
    </td>

    <td class="text-center">
        <?php if(!empty($row['notice_file'])): ?>
        <a href="./images/notices/<?php echo $row['notice_file']; ?>" target="_blank" class="text-primary"
            style="text-decoration:none;">
            <i class="fas fa-file-alt mr-1"></i> View Notice
        </a>
        <?php else: ?>
        <span class="text-muted small">No File</span>
        <?php endif; ?>
    </td>

    <td class="text-center" style="width: 15%;">
        <button class="btn btn-sm btn-info text-white edit-notice-btn" data-bs-toggle="modal"
            data-bs-target="#noticeModal" data-id="<?php echo $row['id']; ?>"
            data-title="<?php echo $row['notice_title']; ?>" data-date="<?php echo $row['notice_date']; ?>"
            data-file="<?php echo $row['notice_file']; ?>">
            <i class="fas fa-edit"></i>
        </button>

        <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=notices" class="btn btn-sm btn-danger"
            onclick="return confirm('Are you sure you want to delete this notice?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php 
    } 
} else {
    echo "<tr><td colspan='4' class='text-center text-muted'>No notice data available.</td></tr>";
}
?>