<?php
require "../config/function.php";

// create users
if (isset($_POST["saveUser"])) {
    $name = validate($_POST["name"]);
    $phone = validate($_POST["phone"]);
    $email = validate($_POST["email"]);
    $password = validate($_POST["passsword"]);
    $role = validate($_POST["role"]);
    $is_ban = isset($_POST["is_ban"]) == true ? 1 : 0;


    if ($name != '' || $email != '' || $phone != '' || $password != '') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'name' => $name,
            'phone' => $phone,
            "email" => $email,
            'password' => $hashedPassword,
            "is_ban" => $is_ban,
            'role' => $role,
        ];

        $result = insert('users', $data);


        if ($result) {
            redirect('users.php', 'User/Admin Added Successfully');
        } else {
            redirect('users-create.php', 'Something Went Wrong');
        }
    } else {
        redirect('users-create.php', 'Please fill all input fields');
    }
}




// update users
if (isset($_POST['updateUser'])) {

    $name = validate($_POST["name"]);
    $phone = validate($_POST["phone"]);
    $email = validate($_POST["email"]);
    $password = validate($_POST["passsword"]);
    $role = validate($_POST["role"]);
    $is_ban = isset($_POST["is_ban"]) == true ? 1 : 0;

    $userId = validate($_POST['userId']);
    $user = getById('users', $userId);

    if ($user['status'] != 200) {
        redirect('users-edit.php?id=' . $userId, 'No Such id Found');
    }

    if ($name != '' || $email != '' || $phone != '' || $password != '') {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $hashedPassword,
            'is_ban' => $is_ban,
            'role' => $role
        ];
        $result = update('users', $userId, $data);
        echo $result;
        if ($result) {
            redirect('users-edit.php?id=' . $userId, 'Admin Updated Successfully');
        } else {
            redirect('users-create.php', 'Something Went Wrong');
        }
    } else {
        redirect('users-create.php', 'Please fill all input fields');
    }
}


// settings 

if (isset($_POST['saveSetting'])) {
    $title = validate($_POST['title']);
    $slug = validate($_POST['slug']);
    $small_description = validate($_POST['small_description']);

    $meta_description = validate($_POST['meta_description']);
    $meta_keyword = validate($_POST['meta_keyword']);

    $email1 = validate($_POST['email1']);
    $email2 = validate($_POST['email2']);
    $phone1 = validate($_POST['phone1']);
    $phone2 = validate($_POST['phone2']);
    $address = validate($_POST['address']);


    $settingId = validate($_POST['settingId']);

    if ($settingId == 'insert') {
        $query = "INSERT INTO settings (title,slug,small_description,meta_description,meta_keyword,email1,email2,phone1,phone2,address)
        VALUES ('$title','$slug','$small_description','$meta_description','$meta_keyword','$email1','$email2','$phone1','$phone2',' $address')";
        $result = mysqli_query($conn, $query);
    }
    if (is_numeric($settingId)) {
        $query = "UPDATE settings SET 
            title='$title',
            slug ='$slug',
            small_description ='$small_description',
            meta_description ='$meta_description',
            meta_keyword ='$meta_keyword',
            email1  ='$email1',
            email2 ='$email2',
            phone1 ='$phone1',
            phone2 ='$phone2',
            address ='$address' 
            WHERE id='$settingId'
        ";
        $result = mysqli_query($conn, $query);
    }


    if ($result) {
        redirect("settings.php", "Settings Saved");
    } else {
        redirect("settings.php", "Something Went Wrong");
    }
}



// create social media
if (isset($_POST["saveSocialMedia"])) {
    $name = validate($_POST["name"]);
    $url = validate($_POST["url"]);
    $status = validate($_POST["status"]);

    if ($name != '' || $url != '') {

        $query = "INSERT INTO social_medias (name,url,status) VALUES ('$name','$url','$status')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            redirect('social-media.php', 'Social Media Added Successfully');
        } else {
            redirect('social-media-create.php', 'Something Went Wrong');
        }
    } else {
        redirect('social-media-create.php', 'Please fill all input fields');
    }
}



// social media update 
if (isset($_POST['updateSocialMedia'])) {
    $name = validate($_POST["name"]);
    $url = validate($_POST["url"]);
    $status = validate($_POST["status"]) == true ? 1 : 0;

    $socialMediaId = validate($_POST["socialMediaId"]);


    if ($name != '' || $url != '') {

        $query = "UPDATE social_medias SET name='$name', url='$url', status='$status' WHERE id='$socialMediaId' LIMIT 1 ";
        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('social-media.php', 'Social Media Updated Successfully');
        } else {
            redirect('social-media-edit.php?id' . $socialMediaId, 'Something Went Wrong');
        }
    } else {
        redirect('social-media-edit.php?id' . $socialMediaId, 'Please fill all input fields');
    }
}




if (isset($_POST['saveService'])) {
    $name = validate($_POST['name']);
    $slug = str_replace(' ', '-', strtolower($name));

    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);


    if ($_FILES['image']['size'] > 0) {

        $image = $_FILES['image']['name'];

        $imgFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if ($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png') {
            redirect("services.php", "Sorry, only JPG, JPEG, PNG images only ");
        }

        $path = "../assets/uploads/services/";
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;

        $finalImage  = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage = NULL;
    }

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keywords = validate($_POST['meta_keyword']);
    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "INSERT INTO  Serivices (
    name,
    slug,
    small_description,
    long_description,
    image,
    meta_title,
    meta_description,
    meta_keyword,
    status
    ) 
    VALUES (
    '$name',
    '$slug',
    '$small_description',
    '$long_description',
    '$finalImage',
    '$meta_title',
    '$meta_description',
    '$meta_keyword',
    '$status'
    )";

    $result = mysqli_query($conn, $query);

    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
        }
        redirect("services.php", "services Added Successfully");
    } else {
        redirect("services.php", "Soemthing Went Wrong!");
    }
}

//update service
if (isset($_POST["updateService"])) {
    $serviceId = validate($_POST['serviceId']);
    $name = validate($_POST['name']);
    $slug = str_replace(' ', '-', strtolower($name));

    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    $service = getById('serivices', $serviceId);


    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];

        $imgFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if ($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png') {
            redirect("services.php", "Sorry, only JPG, JPEG, PNG images only ");
        }

        $path = '../assets/uploads/services/';
        $deleteImage = "../" . $service['data']['image'];
        if (file_exists($deleteImage)) {
            unlink($deleteImage);
        }

        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;
        $finalImage  = 'assets/uploads/services/' . $filename;
    } else {
        $finalImage = $service['data']['image'];
    }

    $meta_title = validate($_POST['meta_title']);
    $meta_description = validate($_POST['meta_description']);
    $meta_keywords = validate($_POST['meta_keyword']);
    $status = validate($_POST['status']) == true ? '1' : '0';


    $query = "UPDATE serivices SET  
        name='$name',
        slug='$slug',
        small_description='$small_description',
        long_description='$long_description',
        image='$finalImage',
        meta_title='$meta_title',
        meta_description='$meta_description',
        meta_keyword='$meta_keyword',
        status='$status'
        WHERE 
        id='$serviceId' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
        }
        redirect("services.php?id=" . $serviceId, "services Update Successfully");
    } else {
        redirect("services.php?id=" . $serviceId, "Soemthing Went Wrong!");
    }
}

// enquires

if (isset($_POST['updateEquiryStatus'])) {
    $enquiryId = validate($_POST['enquiryId']);
    $status = validate($_POST['status']);

    $query = "UPDATE enquires SET status='$status' WHERE id='$enquiryId' ";
    $result =  mysqli_query($conn, $query);

    if ($result) {
        redirect('enquires-view.php?id=' . $enquiryId, 'Status Updated.');
    } else {
        redirect('enquires-view.php?id=' . $enquiryId, 'something Went Wrong!');
    }
}


// create package
if (isset($_POST["savePackage"])) {
    $name = validate($_POST["name"]);
    $amount = validate($_POST["amount"]);
    $vat = validate($_POST["vat"]);
    $details = validate($_POST["details"]);


    if ($name != '' || $amount != '' || $vat != '') {

        $query = "INSERT INTO packages (name,amount,vat,details) VALUES ('$name','$amount','$vat','$details')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            redirect('package.php', 'Package Added Successfully');
        } else {
            redirect('package-create.php', 'Something Went Wrong');
        }
    } else {
        redirect('package-create.php', 'Please fill all input fields');
    }
}


// Update package 
if (isset($_POST['updatePackage'])) {
    $name = validate($_POST["name"]);
    $amount = validate($_POST["amount"]);
    $vat = validate($_POST["vat"]);

    $packageId = validate($_POST["packageId"]);
    $package = getById('packages', $packageId);

    if ($name != '' || $amount != '' || $vat != '') {

        $query = "UPDATE packages SET name='$name', amount='$amount', vat='$vat' WHERE id='$packageId' LIMIT 1 ";
        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('package.php', 'Social Media Updated Successfully');
        } else {
            redirect('package-edit.php?id' . $packageId, 'Something Went Wrong');
        }
    } else {
        redirect('package-edit.php?id' . $packageId, 'Please fill all input fields');
    }
}


