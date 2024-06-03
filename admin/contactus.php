<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-5">
                        <h4>Contact Us List </h4>
                    </div>
                    <div class="col-md-7">
               
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>

                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Create At</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        if(isset($_GET['data']) && $_GET['date'] != '' ){

                            $date = validate($_GET['date']); 
                            $status = validate($_GET['status']);
                            
                            $enquires = mysqli_query($conn, "SELECT * FROM  contactus WHERE created_at='$date' AND status='$status' ORDER BY id DESC ");
                        }else{

                            $enquires = mysqli_query($conn, "SELECT * FROM  contactus ORDER BY id DESC ");
                        }

                        if($enquires) 
                        {
                            if (mysqli_num_rows($enquires) > 0) 
                            {
                                foreach ($enquires as $item) {
                                    ?>
                                    <tr>
                                        <td><?= $item['id'];?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['phone']; ?></td>
                                        <td><?= $item['subject']; ?></td>
                                        <td><?= $item['message']; ?></td>
                                        <td><?= $item['created_at']; ?></td>     
                                        
<!--         
                                        <td class="text-center">
                                            <a href="enquires-view.php?id=<?= $item['id']; ?>"
                                                class="btn btn-info btn-sm">Edit</a>
                                            <a href="services-delete.php?id=<?= $item['id']; ?>" class="btn btn-danger btn-sm mx-2"
                                                onclick="return confirm('Are you sure you want to delete this information?')">Delete</a>
                                        </td> -->
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="6">No Record Found</td>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            ?>
                                <tr>
                                    <td colspan="6">Something Went wrong!</td>
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