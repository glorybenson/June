<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Package List
                    <a href="package-create.php" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>VAT</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $packager = getAll('packages');
                        if (mysqli_num_rows($packager) > 0) {
                            foreach ($packager as $packageItem) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $packageItem['id']; ?>
                                    </td>
                                    <td>
                                        <?= $packageItem['name']; ?>
                                    </td>
                                    <td>
                                        <?= $packageItem['amount']; ?>
                                    </td>
                                    <td>
                                        <?= $packageItem['vat']; ?>
                                    </td>
                                
                        
                                    <td class="text-center">

                                        <a href="package-edit.php?id=<?= $packageItem['id']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <a href="package-delete.php?id=<?= $packageItem['id']; ?>" class="btn btn-danger btn-sm mx-2"
                                            onclick="return confirm('Are you sure you want to delete this information?')">Delete</a>

                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>