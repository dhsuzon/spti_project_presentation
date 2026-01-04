<?php
                
                $query = "SELECT * FROM Campus_Facilitie ORDER BY id DESC";
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)):
                ?>
<tr>
    <td class="text-center">
        <small><?php echo $row['id']; ?></small>
    </td>

    <td class="text-center">
        <img src="./images/logo/<?php echo $row['icon']; ?>" width="40" class="img-thumbnail">
    </td>
    <td class="fw-bold"><?php echo $row['title']; ?></td>
    <td class="text-start">
        <small><?php echo (strlen($row['description']) > 100) ? substr($row['description'], 0, 100).'...' : $row['description']; ?></small>
    </td>
    <td>
        <button class="btn btn-sm  btn-warning edit_btn" data-id="<?php echo $row['id']; ?>" data-bs-toggle="modal"
            data-bs-target="#facilityModal" data-icon="<?php echo $row['icon']; ?>"
            data-title="<?php echo $row['title']; ?>" data-desc="<?php echo $row['description']; ?>">
            <i class="fas fa-edit"></i>
        </button>

        <a href="core/admin/delete.php?id=<?php echo $row['id']; ?>&type=Campus_Facilitie" class="btn btn-sm btn-danger"
            onclick="return confirm('Are you sure you want to delete this facilites')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php 
                    endwhile; 
                } else {
                    echo "<tr><td colspan='5'>No facilities found!</td></tr>";
                }
                ?>