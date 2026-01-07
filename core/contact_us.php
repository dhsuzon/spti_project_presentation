<?php


$get_contact = "SELECT * FROM conttact_us ORDER BY id DESC LIMIT 1";
$contact_res = mysqli_query($conn, $get_contact);
$contact_data = mysqli_fetch_assoc($contact_res);


if ($contact_data):
?>
<div class="address card mt-3 shadow-sm">
    <div class="card-header contact_header_text text-white">
        <h5>Contact us</h5>
    </div>
    <div class="card-body">
        <h6><strong><?php echo $contact_data['inst_name']; ?></strong></h6>

        Address: <strong><?php echo $contact_data['site_address']; ?></strong><br><br>

        Email: <strong><?php echo $contact_data['site_email']; ?></strong><br><br>

        Phone: <strong><?php echo $contact_data['site_phone']; ?></strong><br><br>
    </div>
</div>
<?php else: ?>
<div class="alert alert-info mt-3">Contact information is coming soon...</div>
<?php endif; ?>