<?php 
   
    if (!isset($_SESSION['admin_user'])) {
    
    header("Location: ../../login.php"); 
    exit();
}?>


<?php
                    $query = "SELECT * FROM departments ORDER BY id DESC";
                    $res = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($res)):
                    ?>
<tr>
    <td class="text-center">
        <img src="./images/departments/<?php echo $row['dept_icon']; ?>" width="40" class="img-thumbnail">
    </td>
    <td><?php echo $row['dept_name']; ?></td>
    <td><?php echo $row['head_name']; ?></td>
    <td><?php echo $row['head_contact']; ?></td>
    <td>
        <button class="btn btn-sm btn-info edit-dept-btn" data-bs-toggle="modal" data-bs-target="#deptModal"
            data-id="<?php echo $row['id']; ?>" data-name="<?php echo $row['dept_name']; ?>"
            data-hname="<?php echo $row['head_name']; ?>" data-hemail="<?php echo $row['head_email']; ?>"
            data-hcontact="<?php echo $row['head_contact']; ?>"
            data-intro="<?php echo htmlspecialchars($row['intro_text'] ?? ''); ?>"
            data-job="<?php echo htmlspecialchars($row['job_sector'] ?? ''); ?>"
            data-exam="<?php echo htmlspecialchars($row['exam_system'] ?? ''); ?>"
            data-icon="<?php echo $row['dept_icon']; ?>" data-job_icon="<?php echo $row['job_icon']; ?>"
            data-exam_icon="<?php echo $row['exam_icon']; ?>" data-himg="<?php echo $row['head_image']; ?>">
            <i class="fas fa-edit"></i>
        </button>
        <a href="core/admin/delete.php?id=<?php echo $row['id']; ?>&type=departments" class="btn btn-sm btn-danger"
            onclick="return confirm('Are you sure delete his department info')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php endwhile; ?>