<?php  if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    
    $query = "SELECT * FROM departments WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if(!$row){
        echo "<h2 class='text-center py-5'>No departments data available</h2>";
        include_once 'core/footer.php';
        exit();
    }
} else {
    echo "<script>window.location.href='index.php';</script>";
    exit();
};?>