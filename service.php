<php
$pageTitle = "Services";
include('includes/header.php');

if(isset($_GET['slug'])){
if($_GET['slug'] == null){
        redirect('services.php','');
    }
} else {
    redirect('services.php','');
}

$slug = validate($_GET['slug']); // Assuming you have a function validate for sanitization
$service = "SELECT * FROM serivices WHERE status='0' AND slug='$slug' LIMIT 1"; 
$result = mysqli_query($conn, $service);
if(!$result || mysqli_num_rows($result) == 0) {
    redirect("services.php","");
}

if(mysqli_num_rows($result) == 0) {
    redirect("services.php","");
}

$rowData = mysqli_fetch_assoc($result); // Fetch the result row

?>

<div class="py-5 bg-secondarr">
    <div class="container">
        <h4 class="text-white text-center "> <?= $rowData['name'] ?></h4>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-body shadow-sm">
                    <h4><?= $rowData['name'] ?></h4>
                    <div class="underline"></div>
                    <p>
                        <?= $rowData['small_description'] ?> <!-- Changed $result['$small_description'] to $row['small_description'] -->
                    </p>
                    <?php if ($rowData['image'] != '') : ?>
                            <img src="<?= $rowData['image']; ?>" class="w-100 rounded" alt="img" />
                        <?php else: ?>
                            <img src="assets/icons/accept.png" class="w-100 rounded" alt="img" />
                        <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sticky-top" style="top:120px;">
                    <div class="card-header bg-warning">
                        <h4 class="text-white mb-0">Enquire Now</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Service</label>
                                <input type="text" name="service" readonly value="<?= $rowData['name'] ?>" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Message</label>
                                <textarea name="message" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="md-3">
                                <button type="submit" name="enquireBtn" class="btn w-100 btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
