<?php 
    require 'config/function.php';

    if (isset($_POST['enquireBtn'])) {
        $name = validate($_POST['name']);  
        $email = validate($_POST['email']);  
        $phone = validate($_POST['phone']);  
        $service = validate($_POST['service']);  
        $message = validate($_POST['message']);  

        $query = "INSERT INTO enquires (name,email,phone,service,message)  VALUES ('$name','$email','$phone','$service','$message') ";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect("thank-you.php","Thanks you for contacting us. We will  get back  to you soon.");
        }else{
            redirect("thank-you.php","Something Went  Wrong!.");
        }
    }

if (isset($_POST["clientReg"])) {
    $organisation = validate($_POST["organisation"]);   
    $title = validate($_POST["title"]);
    $firstname = validate($_POST["firstname"]);
    $lastname = validate($_POST["lastname"]);
    $phone = validate($_POST["phone"]);
    $email = validate($_POST["email"]);
    $password = validate($_POST["password"]);
    $houseNumber = validate($_POST["houseNumber"]);
    $street = validate($_POST["street"]);
    $locality = validate($_POST["locality"]);
    $town = validate($_POST["town"]);
    $county = validate($_POST["county"]);
    $postCode = validate($_POST["postCode"]);
    $country = validate($_POST["country"]);

    $query = "INSERT INTO users (organisation,title,firstname,lastname,phone,email,password,houseNumber,street,locality,town,county,postCode,country)  VALUES ('$organisation','$title','$firstname','$lastname','$phone','$email','$password','$houseNumber','$street','$locality','$town','$county','$postCode','$country') ";
    $result = mysqli_query($conn, $query);

    if($result){
        redirect("client/pages-profile.php","Profile created sucessfully");
    }else{
        redirect("register/index.php","Something Went  Wrong!.");

    }
}



if (isset($_POST['contactSubmit'])) {
    $name = validate($_POST['name']);  
    $email = validate($_POST['email']);  
    $phone = validate($_POST['phone']);  
    $subject = validate($_POST['subject']);  
    $message = validate($_POST['message']);  

    $query = "INSERT INTO contactus  (name,email,phone,subject,message)  VALUES ('$name','$email','$phone','$subject','$message') ";
    $result = mysqli_query($conn, $query);

    if($result){
        redirect("./contact-us/index.php","Thanks you for contacting us. We will  get back  to you soon.");
    }else{
        redirect("./contact-us/index.php","Something Went  Wrong!.");

    }
}
