<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header">
                <h4>Website Settings</h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <form action="code.php" method="post">

                    <?php
                        $setting = getById('settings', 1);
                    ?>
                    <input type="hidden" name="settingId" value=" <?= $setting['data']['id'] ?? 'insert' ?> " />

                    <div class="md-3">
                        <label>Title</label>
                        <input type="text" name="title" value=" <?= $setting['data']['title'] ?? "" ?> "
                            class="form-control">
                    </div>
                    <div class="md-3">
                        <label>URL / Domain</label>
                        <input type="text" name="slug"  value=" <?= $setting['data']['slug'] ?? "" ?> " class="form-control">
                    </div>
                    <div class="md-3">
                        <label>Small Description</label>
                        <input type="text" name="small_description" value=" <?= $setting['data']['small_description'] ?? "" ?> " class="form-control">
                    </div>


                    <h4 class="my-3">SEO Settings</h4>
                    <div class="md-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"><?= $setting['data']['email1'] ?? "" ?></textarea>
                    </div>
                    <div class="md-3">
                        <label>Meta Keywoard</label>
                        <input type="text"   value=" <?= $setting['data']['meta_keyword'] ?? "" ?> " name="meta_keyword" class="form-control">
                    </div>
                    <h4 class="my-3">Contact Information</h4>
                    <div class="row">
                        <div class="col-md-6 md-3">
                            <label>Email 1</label>
                            <input type="email" value=" <?= $setting['data']['email1'] ?? "" ?> " name="email1" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label>Company No</label>
                            <input type="text" value=" <?= $setting['data']['email2'] ?? "" ?> " name="email2" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label>Phone 1</label>
                            <input type="text" value=" <?= $setting['data']['phone1'] ?? "" ?> " name="phone1" class="form-control">
                        </div>
                        <div class="col-md-6 md-3">
                            <label>VAT No</label>
                            <input type="text" value=" <?= $setting['data']['phone2'] ?? "" ?> " name="phone2" class="form-control">
                        </div>
                        <div class="col-md-12 md-3">
                            <label>Address</label>
                            <textarea name="address"  class="form-control" rows="3"> <?= $setting['data']['address'] ?? "" ?> </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="md-3 text-end ">
                        <button type="submit" name="saveSetting" class="btn btn-primary">Save Setting</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>