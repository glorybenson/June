<?php

require '../config/function.php';

$paramResult = checkParamId('id');
if (is_numeric($paramResult)) {

    $socialMediaId = validate($paramResult);
    $socialMedia = getById('social_medias', $socialMediaId);

    if ($socialMedia['status'] == 200) {
        $socialMediaDeleteRes = deleteQuery('social_medias', $socialMediaId);
        if ($socialMediaDeleteRes) {
            redirect('social-media.php', 'Social Media Handle Deleted Successful');

        } else {
            redirect('social-media.php', 'Something Went Wrong');
        }

    } else {
        redirect('social-media.php', $socialMedia['message']);
    }
} else {
    redirect('social-media.php', $paramResult);
}
?>