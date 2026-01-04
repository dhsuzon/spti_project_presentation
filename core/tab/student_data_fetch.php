<?php 
    if (!isset($_SESSION['admin_user'])) {
    
    header("Location: ../../login.php"); 
    exit();
}?>
<?php 
                    $query = "SELECT * FROM students ORDER BY id DESC";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td class="text-center">
        <?php if(!empty($row['student_image'])): ?>
        <img src="images/students/<?php echo $row['student_image']; ?>" class="rounded-1 border shadow-sm" width="60"
            height="60" style="object-fit: cover;">
        <?php else: ?>
        <img src="" class="rounded-1 border" width="60" height="60">
        <?php endif; ?>
    </td>
    <td>
        <div class="text-dark font-weight-bold"><?php echo $row['student_name']; ?>
        </div>
        <small class="text-primary">Roll: <?php echo $row['roll_no']; ?></small>
    </td>
    <td class="d-none d-md-table-cell"><?php echo $row['reg_no']; ?></td>
    <td><span class="badge bg-light text-dark border"><?php echo $row['student_department']; ?></span>
    </td>
    <td class="d-none d-md-table-cell">
        <div><?php echo $row['semester']; ?> Sem</div>
        <small class="text-muted"><?php echo $row['session']; ?></small>
    </td>
    <td>
        <?php if($row['status'] == 'active'): ?>
        <span class="badge bg-success">Active</span>
        <?php else: ?>
        <span class="badge bg-danger">Inactive</span>
        <?php endif; ?>
    </td>
    <td class="text-center">
        <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-info edit-student-btn" data-bs-toggle="modal"
                data-bs-target="#studentModal" data-id="<?php echo $row['id']; ?>"
                data-name="<?php echo $row['student_name']; ?>" data-roll="<?php echo $row['roll_no']; ?>"
                data-reg="<?php echo $row['reg_no']; ?>" data-dept="<?php echo $row['student_department']; ?>"
                data-semester="<?php echo $row['semester']; ?>" data-session="<?php echo $row['session']; ?>"
                data-phone="<?php echo $row['phone']; ?>" data-status="<?php echo $row['status']; ?>">
                <i class="fas fa-edit"></i>
            </button>

            <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=students"
                class="btn btn-sm btn-outline-danger"
                onclick="return confirm('Are you sure you want to delete this student?')">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
<?php endwhile; 
                    } else { ?>
<tr>
    <td colspan="7" class="text-center py-5">
        <h5 class="text-muted">No Students Available</h5>
        <p>Please add some students to see the list.</p>
    </td>
</tr>
<?php } ?>