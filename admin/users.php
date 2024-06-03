<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    User Lists
                    <a href="users-create.php" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Banned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $users = getAll('users');
                        if (mysqli_num_rows($users) > 0) {
                            foreach ($users as $userItem) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $userItem['id']; ?>
                                    </td>
                                    <td>
                                        <?= $userItem['name']; ?>
                                    </td>
                                    <td>
                                        <?= $userItem['email']; ?>
                                    </td>
                                    <td>
                                        <?= $userItem['phone']; ?>
                                    </td>
                                    <!-- <td>
                                        <?= $userItem['password']; ?>
                                    </td> -->
                                    <td>
                                        <?= $userItem['role']; ?>
                                    </td>
                                    <td>
                                    <?php
                                                if($userItem['is_ban'] == 1){
                                                    echo '<span class="badge bg-danger text-white">Banned</span>';
                                                }else{
                                                    echo '<span class="badge bg-success text-white">Active</span>';
                                                }
                                            ?>
                                    
                                    </td>
                                    <td class="text-center">

                                        <a href="users-edit.php?id=<?= $userItem['id']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php?id=<?= $userItem['id']; ?>" class="btn btn-danger btn-sm mx-2"
                                            onclick="return confirm('Are you sure you want to delete this information?')">Delete</a>

                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="8">No Record Found</td>
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