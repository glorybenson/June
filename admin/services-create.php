<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add Services Lists
                    <a href="services.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <form action="code.php" method="post" enctype="multipart/form-data">

                    <div class="md-3">
                        <label>Service Name</label>
                        <input type="text" name="name" required class="form-control">
                    </div>

                    <div class="md-3">
                        <label> Service Description</label>
                        <textarea name="small_description" required class="form-control" rows="3"></textarea>
                    </div>

                    <div class="md-3">
                        <label> Long Description</label>
                        <textarea name="long_description"  class="form-control mySummernote" rows="3"></textarea>
                    </div>

                    <div class="md-3">
                        <label> Upload Service Imaege</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <h5>SEO Tags</h5>
                    <div class="md-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" required class="form-control"></input>
                    </div>
                    <div class="md-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="md-3">
                        <label>Mata Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="md-3">
                        <label>Status (checked=hiddenn, un-checked=visible)</label>
                        <br>
                        <input type="checkbox" name="status" style="width:30px; height:30px;"></input>
                    </div>

                    <div class="md-3 text-end">
                        <button type="submit" name="saveService" class="btn btn-primary">Save Services</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>