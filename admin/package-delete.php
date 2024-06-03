<?php

require '../config/function.php';

$paramResult = checkParamId('id');
if (is_numeric($paramResult)) {

    $packagesId = validate($paramResult);
    $package = getById('packages', $packageId);

    if ($package['status'] == 200) {
        $packageDeleteRes = deleteQuery('packages', $packageId);
        if ($packageDeleteRes) {
            redirect('package.php', 'Package Deleted Successful');

        } else {
            redirect('package.php', 'Something Went Wrong');
        }

    } else {
        redirect('package.php', $package['message']);
    }
} else {
    redirect('package.php', $paramResult);
}




