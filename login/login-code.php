<?php
require '../config/function.php';

if (isset($_POST["loginBtn"])) 
{


    $emailInput = validate($_POST["email"]);
    $passwordInput = validate($_POST["password"]);

    $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if ($email != '' && $password != '') {
        // $query = "SELECT * FROM  users WHERE email='$email' AND  password='$password' LIMIT 1 ";
        $query = "SELECT * FROM  users WHERE email='$email' LIMIT 1 ";
        $result = mysqli_query($conn, $query);

        if ($result) {

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $hashedPassword = $row['password'];
                if (!password_verify($password, $hashedPassword)) {
                    redirect('../login/index.php', 'Invalid Password');
                }



                if ($row['role'] == 'admin') {

                    if ($row['is_ban'] == 1) {
                        redirect('../login/index.php', 'Your  account has been banned. Please contact admin');
                    }

                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];

                    redirect('../admin/index.php', 'Logged In SuccessFully');
                } else {

                    if ($row['is_ban'] == 1) {
                        redirect('../login/index.php', 'Your  account has been banned. Please contact admin');
                    }

                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'name' => $row['name'],
                        'email' => $row['email']
                    ];
                    redirect('../client/index.php', 'Logged In SuccessFully');
                }
            } else {
                redirect('../login/index.php', 'Invalid Email Id');
            }
        } else {
            redirect('../login/index.php', 'Something Went Wrong');
        }
    } else {
        redirect('../login/index.php', 'All Fields are mandetory');
    }

}
