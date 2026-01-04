

<?php 
$sql = "SELECT * FROM teachers";
$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { 
    ?>
<div class="col-md-6 mb-4">
    <div class="card h-100 staff-card">
        <div class="row g-0 h-100">
            <div class="col-4 d-flex align-items-center justify-content-center p-2">
                <img src="./images/faculty/<?php echo $row['teacher_image']; ?>" class="img-fluid rounded"
                    alt="this is facultu image">
            </div>
            <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title mb-1 fw-bold fs-3"><?php echo $row['name']; ?></h5>
                    <p class="card-text mb-1"><strong>Designation:</strong>
                        <?php echo $row['designation']; ?>
                    </p>
                    <p class="card-text mb-1"><strong>Cell:</strong>
                        <?php echo $row['phone']; ?></p>
                    <p class="card-text"><strong>Email:</strong> <?php echo $row['email']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
        } 
    } else {
        echo "<p class='text-center'>No faculty members found.</p>";
    }
    ?>