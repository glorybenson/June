<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit package
                    <a href="package.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>

            <div class="card-body">
                <?= alertMessage() ?>
                <form action="code.php" method="post">
                    <?php
                    $paramResult = checkParamId('id');
                    if (!is_numeric($paramResult)) {
                        echo '<h5>' . $paramResult . '</h5>';
                        return false;
                    }
                    $package = getById('packages', $paramResult);
                    if ($package['status'] == 200) {
                    ?>
                        <input type="hidden" name="packageId" value="<?= $package['data']['id']; ?>" required>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?= $package['data']['name']; ?>" required class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-3">
                                    <label>Amount</label>
                                    <input type="text" name="phone" value="<?= $package['data']['amount']; ?>" required class="form-control">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="md-3">
                                    <label>VAT</label>
                                    <input type="text" name="phone" value="<?= $package['data']['vat']; ?>" required class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-3 text-end">
                                    <br>
                                    <button type="submit" name="updatePackage" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        <?php
                    } else {
                        echo '<h5>' . $package['message'] . '</h5>';
                    }
                        ?>
                        </div>

                </form>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>