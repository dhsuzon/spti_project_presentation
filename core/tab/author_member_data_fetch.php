<?php 
    if (!isset($_SESSION['admin_user'])) {
    
    header("Location: ../../login.php"); 
    exit();
}?>

<?php 
                    
                        $query = "SELECT * FROM author_members ORDER BY id DESC";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
<tr class="align-middle">
    <td><?php echo $row['id']; ?></td>
    <td class="text-left">
        <strong><?php echo $row['name']; ?></strong> <br>

    </td>
    <td class="text-left">
        <small class="text-muted"><?php echo $row['designation']; ?></small>
    </td>
    <td>
        <small><?php echo $row['institution']; ?></small>


    </td>
    <td>
        <p><?php echo $row['message']; ?></p>
    </td>
    <td>
        <?php if($row['image_file']): ?>
        <img src="images/authors/<?php echo $row['image_file']; ?>" width="50" height="50"
            class="rounded-circle shadow-sm" style="object-fit: cover;">
        <?php else: ?>
        <small class="text-muted">No Image</small>
        <?php endif; ?>
    </td>
    <td>
        <span
            class="badge text-dark <?php echo ($row['member_role'] == 'director') ? 'badge-dark' : 'badge-success'; ?> text-uppercase">
            <?php echo $row['member_role']; ?>
        </span>
    </td>




    <td>
        <?php if($row['status'] == 1): ?>
        <span class="badge badge-primary text-dark">Active</span>
        <?php else: ?>
        <span class="badge badge-secondary">Inactive</span>
        <?php endif; ?>
    </td>
    <td>
        <button class="btn btn-sm btn-info edit-auth-btn" data-id="<?php echo $row['id']; ?>"
            data-name="<?php echo $row['name']; ?>" data-desig="<?php echo $row['designation']; ?>"
            data-inst="<?php echo $row['institution']; ?>" data-role="<?php echo $row['member_role']; ?>"
            data-msg="<?php echo htmlspecialchars($row['message'] ?? " "); ?>"
            data-image="<?php echo $row['image_file']; ?>">
            <i class="fas fa-edit"></i>
        </button>
        <a href="./core/admin/delete.php?id=<?php echo $row['id']; ?>&type=author_members"
            class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure you want to delete this banner?')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>
<?php 
                            } 
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>No records found in author_members table.</td></tr>";
                        }
                        ?>