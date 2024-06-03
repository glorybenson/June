<?php
$pageTitle ="Services";
include('includes/header.php');
?>

<div class="py-5 bg-secondarr">
    <div class="container">
        <div class="text-white text-center">Our Services</div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
        <?php
            $serviceQuery = "SELECT * FROM serivices WHERE status='0'";
            $result = mysqli_query($conn, $serviceQuery);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    foreach ($result as $row) {
        ?>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <?php if ($row['image'] != '') : ?>
                        <img src="<?= $row['image']; ?>" class="w-100 rounded" alt="img" style="min-height:200px;max-height:200px"/>
                    <?php else: ?>
                        <img src="assets/icons/accept.png" class="w-100 rounded" alt="img" style="min-height:200px;max-height:200px"/>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5><?= $row['name']; ?></h5>
                        <p><?= $row['small_description']; ?></p>
                        <div>
                            <a href="service.php?slug=<?= $row['slug']; ?>" class="text-primary">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                    }
                } else {
                    ?>
                        <div class="col-md-12">
                            <h5>No Pagekage Found</h5>
                        </div>
                    <?php
                }
            } else {
                    ?>
                        <div class="col-md-12">
                            <h5>Something Went Wrong!</h5>
                        </div>
                    <?php
                }
        ?>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
