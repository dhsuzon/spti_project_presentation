<?php 
require_once "./config/db.php";


$sql = "SELECT * FROM notices ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<?php 


                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { 
                ?>
<tr>
    <td><?php echo date('d-m-Y', strtotime($row['created_at'])); ?></td>

    <td class="text-start"><?php echo $row['notice_title']; ?></td>

    <td>
        <?php if(!empty($row['notice_file'])): ?>
        <a href="./images/notices/<?php echo $row['notice_file']; ?>" target="_blank"
            class="btn btn-sm btn-info text-white">
            <i class="fas fa-eye"></i> View Notice
        </a>
        <?php else: ?>
        <span class="badge bg-secondary text-white">No File</span>
        <?php endif; ?>
    </td>

    <td>
        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
    </td>
</tr>
<?php 
                    } 
                } else {
                    echo "<tr><td colspan='4' class='py-4'>No Data Found</td></tr>";
                }
                ?>