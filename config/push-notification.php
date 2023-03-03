<?php

return array(

    'Rider'     => array(
        'environment' =>'development',
        'certificate' =>app_path().'/CabmeRiderDev.pem',
        'passPhrase'  =>'password',
        'service'     =>'apns'
    ),
    'Driver'     => array(
        'environment' =>'development',
        'certificate' => app_path().'/CabmeDriverDev.pem',
        'passPhrase'  =>'password',
        'service'     =>'apns'
    )

);



?>