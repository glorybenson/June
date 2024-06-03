<?php

    require '../config/function.php';

    $paramResult = checkParamId('id');
        if (is_numeric($paramResult)) {

            $serviceId = validate($paramResult);
        
            $service = getById('serivices', $serviceId);
            if ($service['status'] == 200) {
                $serviceDeleteRes = deleteQuery('serivices', $serviceId);
                if ($serviceDeleteRes) {

                    $deleteImage = "../".$service['data']['image'];
                    if(file_exists($deleteImage)){
                        unlink($deleteImage);
                    }
            
                    redirect('services.php', 'Service Deleted Successful');

                } else {
                    redirect('services.php', 'Something Went Wrong');
                }

            } else {
                redirect('services.php', $service['message']);
            }
        } else {
            redirect('services.php', $paramResult);
        }