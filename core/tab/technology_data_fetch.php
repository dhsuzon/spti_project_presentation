        <?php
                    $sl = 1;
                    
                    $sql = "SELECT courses.*, departments.dept_name 
                            FROM courses 
                            JOIN departments ON courses.dept_id = departments.id";
                    $res = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($res)){
                    ?>
        <tr>
            <td><?php echo $sl++; ?></td>
            <td><strong><?php echo $row['dept_name']; ?></strong></td>
            <td><?php echo $row['tech_name']; ?></td>
            <td>
                <img src="images/technology_image/<?php echo $row['tech_image']; ?>" width="60" class="rounded border">
            </td>
            <td>
                <button type="button" class="btn btn-sm btn-info edit_tech" data-bs-toggle="modal"
                    data-bs-target="#techModal" data-id="<?php echo $row['id']; ?>"
                    data-dept="<?php echo $row['dept_id']; ?>" data-tech="<?php echo $row['tech_name']; ?>"
                    data-image="<?php echo $row['tech_image']; ?>">
                    <i class="fa fa-edit"></i>
                </button>

                <a href="core/admin/delete.php?id=<?php echo $row['id']; ?> &type=courses" class="btn btn-sm btn-danger"
                    onclick="return confirm('Are you sure you want to delete this course?')">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php } ?>