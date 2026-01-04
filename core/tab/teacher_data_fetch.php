<?php 
    if (!isset($_SESSION['admin_user'])) {
    
    header("Location: ../../login.php"); 
    exit();
}?>

<?php
    $query = "SELECT * FROM teachers ORDER BY id DESC";
    $result = mysqli_query($conn, $query);


    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td>
        <img src="images/faculty/<?php echo $row['teacher_image']; ?>" class="shadow-sm" width="70" height="70"
            style="object-fit: cover;">
    </td>
    <td><span class="font-weight-bold text-dark"><?php echo $row['name']; ?></span></td>
    <td class="d-none d-md-table-cell"><span><?php echo $row['teacher_department']; ?></span></td>
    <td class="d-none d-md-table-cell"><span><?php echo $row['designation']; ?></span></td>
    <td class="d-none d-md-table-cell"><span><?php echo $row['email']; ?></span></td>
    <td><small><?php echo $row['phone']; ?></small></td>
    <td class="text-center">
        <div class="btn-group shadow-sm border rounded">
            <button type="button" class="btn btn-sm btn-white text-info border-right edit-teacher-btn"
                data-bs-toggle="modal" data-bs-target="#addTeacherModal" data-id="<?php echo $row['id']; ?>"
                data-name="<?php echo $row['name']; ?>" data-dept="<?php echo $row['teacher_department']; ?>"
                data-image="<?php echo $row['teacher_image']; ?>" data-designation="<?php echo $row['designation']; ?>"
                data-phone="<?php echo $row['phone']; ?>" data-email="<?php echo $row['email']; ?>">
                <i class="fa fa-edit"></i>
            </button>

            <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=teachers"
                class="btn btn-sm btn-white text-danger" onclick="return confirm('Are you sure?')"><i
                    class="fa fa-trash"></i></a>
        </div>
    </td>
</tr>
<?php endwhile; 
    } else { ?>
<tr>
    <td colspan="7" class="text-center py-4">
        <div class="text-muted">
            <p class="mb-0">No teachers found in the database.</p>
        </div>
    </td>
</tr>
<?php } ?>