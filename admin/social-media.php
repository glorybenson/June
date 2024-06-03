<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Social Media Lists
                    <a href="social-media-create.php" class="btn btn-primary float-end">Add Social Media</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Url</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $socialMedias = getAll('social_medias');
                        if($socialMedias)
                        {
                            if (mysqli_num_rows($socialMedias) > 0) 
                            {
                                foreach ($socialMedias as $item) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $item['id']; ?>
                                        </td>
                                        <td>
                                            <?= $item['name']; ?>
                                        </td>
                                        <td>
                                            <?= $item['url']; ?>
                                        </td>
                                        <td>
                                        <?php
                                                if($item['status'] == 1){
                                                    echo '<span class="badge bg-danger text-white">Hidden</span>';
                                                }else{
                                                    echo '<span class="badge bg-success text-white">Shown</span>';
                                                }
                                            ?>
                                         
                                        </td>
                                        <td class="text-center">
    
                                            <a href="social-media-edit.php?id=<?= $item['id']; ?>"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <a href="social-media-delete.php?id=<?= $item['id']; ?>" class="btn btn-danger btn-sm mx-2"
                                                onclick="return confirm('Are you sure you want to delete this information?')">Delete</a>
    
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">No Record Found</td>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            ?>
                            `    <tr>
                                    <td colspan="5">Something Went wrong!</td>
                                </tr>`
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