<?php
$pageTitle = "Login";
include('includes/header.php');

if (isset($_SESSION['auth'])) {
    redirect('index.php', 'Your already Logged in');
}
?>

<div class="py-4 bg-secondary text-center">
    <h4 class="text-white">Login Page</h4>
</div>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow ">

                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <?= alertMessage() ?>
                    <div class="card-body">
                        <form action="login-code.php" method="post">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type=Password" name="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="loginBtn" class="btn btn-primary w-100 ">Login</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>