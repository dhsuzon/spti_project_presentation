<?php
                    $res = mysqli_query($conn, "SELECT * FROM conttact_us");
                    while($row = mysqli_fetch_assoc($res)){
                    ?>
<tr>
    <td><?php echo $row['inst_name']; ?></td>
    <td><?php echo $row['site_address']; ?></td>
    <td><?php echo $row['site_email']; ?></td>
    <td><?php echo $row['site_phone']; ?></td>
    <td>
        <button type="button" class="btn btn-sm btn-info edit_contact" data-bs-toggle="modal"
            data-bs-target="#settingsModal" data-id="<?php echo $row['id']; ?>"
            data-name="<?php echo $row['inst_name']; ?>" data-address="<?php echo $row['site_address']; ?>"
            data-email="<?php echo $row['site_email']; ?>" data-phone="<?php echo $row['site_phone']; ?>">
            <i class="fa fa-edit"></i>
        </button>
        <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=conttact_us"
            class="btn btn-sm btn-danger ml-1"
            onclick="return confirm('Are you sure you want to delete this contact info?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php } ?>