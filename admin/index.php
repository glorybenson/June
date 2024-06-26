<?php include('includes/header.php'); ?>


<div class="row">
  
  <div class="col-md-3 mb-4">
    <div class="card card-body p-3">
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
      <h5 class="font-weight-bolder mb-0">
        <?= getCount('users')?>
      </h5>
    </div>
  </div>

  <div class="col-md-3 mb-4">
    <div class="card card-body p-3">
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Package</p>
      <h5 class="font-weight-bolder mb-0">
      <?= getCount('packages')?>
      </h5>
    </div>
  </div>

  <div class="col-md-3 mb-4">
    <div class="card card-body p-3">
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Completed Enquires</p>
      <h5 class="font-weight-bolder mb-0">
      <?= getCount('enquires')?>
      </h5>
    </div>
  </div>
  <?= alertMessage() ?>
</div>






<?php include('includes/footer.php'); ?>