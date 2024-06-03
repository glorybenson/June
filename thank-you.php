<?php
    $pageTitle ="Thank You Page";
    include('includes/header.php');
?>


<div class="py-5 bg-secondarr">
    <div class="container">
        <div class="text-white text-center">Thank Your </div>
    </div>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body shadow-sm">
                    <h4>Thank You</h4>
                    <div>
                        <?= alertMessage(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>