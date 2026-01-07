<?php
                    $res = mysqli_query($conn, "SELECT * FROM scholarships");
                    while($row = mysqli_fetch_assoc($res)){
                    ?>
<tr>
    <td><?php echo $row['scholor_title']; ?></td>
    <td><?php echo $row['scholor_des']; ?></td>
    <td>
        <button type="button" class="btn btn-sm btn-info edit_scholar" data-bs-toggle="modal"
            data-bs-target="#scholarModal" data-scholar_id="<?php echo $row['id']; ?>"
            data-scholar_title="<?php echo $row['scholor_title']; ?>"
            data-scholar_des="<?php echo $row['scholor_des']; ?>">

            <i class="fa fa-edit"></i>
        </button>
        <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=scholarships"
            class="btn btn-sm btn-danger ml-1"
            onclick="return confirm('Are you sure you want to delete this scholor info?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php } ?>