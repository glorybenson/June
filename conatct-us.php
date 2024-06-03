<?php
$pageTitle ="Contact Us";
    include('includes/header.php');
?>
    <div class="py-5">
        <div class="conatiber">
            <h4 class="text-white text-center">Contact Us</h4>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    Contact
                </div>
                <div class="col-md-6">
                    <h4 class="footer-heading">Contact Information</h4>
                    <hr>
                    <p>Address: <?= webSetting('address') ?? ''; ?></p>
                    <p>Email: <?= webSetting('email1') ?? ''; ?> , <?= webSetting('email2') ?? ''; ?></p>
                    <p>Phone: <?= webSetting('phone1') ?? ''; ?> , <?= webSetting('phone2') ?? ''; ?></p>
                </div>
            </div>

        </div>
    </div>



<?php include('includes/footer.php'); ?>