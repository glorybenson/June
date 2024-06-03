<?php

require '../config/function.php';

$paramResult = checkParamId('id');
if (is_numeric($paramResult)) {

    $userId = validate($paramResult);
    $user = getById('users', $userId);

    if ($user['status'] == 200) {
        $userDeleteRes = deleteQuery('users', $userId);
        if ($userDeleteRes) {
            redirect('users.php', 'User Deleted Successful');

        } else {
            redirect('users.php', 'Something Went Wrong');
        }

    } else {
        redirect('users.php', $user['message']);
    }
} else {
    redirect('users.php', $paramResult);
}
?>