<?php
                    $res = mysqli_query($conn, "SELECT * FROM admission_details");
                    while($row = mysqli_fetch_assoc($res)){
                    ?>
<tr>
    <td><?php echo $row['category']; ?></td>
    <td><?php echo $row['info_text']; ?></td>
    <td>
        <button type="button" class="btn btn-sm btn-warning edit_admission_btn" data-bs-toggle="modal"
            data-bs-target="#admissionModal" data-admission_id="<?php echo $row['id']; ?>"
            data-admission_category="<?php echo $row['category']; ?>"
            data-admission_info_text="<?php echo $row['info_text']; ?>">
            <i class="fa fa-edit"></i>
        </button>
        <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=admission_details"
            class="btn btn-sm btn-danger ml-1"
            onclick="return confirm('Are you sure you want to delete this admission info?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php } ?>