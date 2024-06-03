<?php include '../config/function.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>
    <title>Profile | Attex - Bootstrap 5 Admin & Dashboard Template</title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>
</head>



<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'layouts/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Attex</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile</h4>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    

                                    <h4 class="mb-1 mt-2">
                                        <?= clientInfo('firstname') ?? ''; ?> 
                                        <?= clientInfo('lastname') ?? ''; ?>
                                    </h4>
                                    <p class="text-muted">
                                    <?= clientInfo('organisation') ?? ''; ?>
                                    </p>
<!-- 
                                    <button type="button" class="btn btn-success btn-sm mb-2">Follow</button>
                                    <button type="button" class="btn btn-danger btn-sm mb-2">Message</button> -->

                                    <div class="text-start mt-3">
                                        <h4 class="fs-13 text-uppercase">About Me :</h4>
                                        <p class="text-muted mb-3">
                                            Hi I'm Tosha Minner,has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type.
                                        </p>
                                        <p class="text-muted mb-2"><strong>Full Name :</strong> <span class="ms-2">
                                        <?= clientInfo('firstname') ?? ''; ?> 
                                        <?= clientInfo('lastname') ?? ''; ?>
                                        </span></p>

                                        <p class="text-muted mb-2"><strong>Mobile :</strong><span class="ms-2">
                                        <?= clientInfo('phone') ?? ''; ?> 
                                        </span></p>

                                        <p class="text-muted mb-2"><strong>Email :</strong> <span class="ms-2 ">
                                        <?= clientInfo('email') ?? ''; ?> 
                                        </span></p>

                                        <p class="text-muted mb-1"><strong>Location :</strong> <span class="ms-2">
                                            <?= clientInfo('Country') ?? ''; ?> 
                                        </span></p>
                                    </div>

                                </div> <!-- end card-body -->
                            </div> <!-- end card -->

                            <!-- Messages-->
                            <div class="card">
                                <!-- <div class="card-body"> -->
                                    <!-- <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h4 class="header-title">Messages</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->

                                    <div class="inbox-widget">
                                        <!-- <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Tomaslau</p>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">
                                                <a href="#" class="btn btn-sm btn-link text-info fs-13"> Reply </a>
                                            </p>
                                        </div> -->
                                        <!-- <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Stillnotdavid</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">
                                                <a href="#" class="btn btn-sm btn-link text-info fs-13"> Reply </a>
                                            </p>
                                        </div> -->
                                        <!-- <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Kurafire</p>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">
                                                <a href="#" class="btn btn-sm btn-link text-info fs-13"> Reply </a>
                                            </p>
                                        </div> -->

                                        <!-- <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Shahedk</p>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">
                                                <a href="#" class="btn btn-sm btn-link text-info fs-13"> Reply </a>
                                            </p>
                                        </div> -->
                                        <!-- <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Adhamdannaway</p>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">
                                                <a href="#" class="btn btn-sm btn-link text-info fs-13"> Reply </a>
                                            </p>
                                        </div> -->
                                    </div> <!-- end inbox-widget -->
                                </div> <!-- end card-body-->
                            </div>
                            <!-- end card-->

                        </div> <!-- end col-->

                        <div class="col-xl-8 col-lg-7">
                            <!-- Chart-->
                            <div class="card">
                                <!-- <div class="card-body">
                                    <h4 class="header-title mb-3">Orders & Revenue</h4>
                                    <div dir="ltr">
                                        <div style="height: 260px;" class="chartjs-chart">
                                            <canvas id="high-performing-product"></canvas>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- End Chart-->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <?php include 'layouts/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'layouts/right-sidebar.php'; ?>

    <?php include 'layouts/footer-scripts.php'; ?>

    <!-- Chart.js -->
    <script src="assets/vendor/chart.js/chart.min.js"></script>

    <!-- Profile Demo App js -->
    <script src="assets/js/pages/demo.profile.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>