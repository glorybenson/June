<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add Package
                    <a href="package.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <form action="code.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-3">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-3">
                                <label>VAT</label>
                                <input type="text" name="vat" class="form-control">
                            </div>
                        </div>
                
                        
                        <div class="col-md-6">
                            <div class="md-3 text-end">
                                <br>
                                <button type="submit" name="savePackage" class="btn btn-primary">Save </button>
                            </div>`
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>