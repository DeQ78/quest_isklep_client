<?php

require __DIR__ . '/vendor/autoload.php';


try {

    $isklepAccess = json_decode(file_get_contents(__DIR__ . '/apiAccess.json'), true);

    $prod = new \dq78\isklep_api_client\producer\Producers($isklepAccess);

    $producerObj = new \dq78\isklep_api_client\producer\ProducerObj(
        array(
//            'id' => 739,
            'name' => 'G2',
            'site_url' => 'google.com',
            'logo_filename' => 'empty.jpg',
//            'ordering' =>739,
//            'source_id' =>''
        )
    );
    $prod->createOne($producerObj);


} catch (\ErrorException $e) {
    echo 'zgloszono blad <br/>';
    echo $e->getMessage();
    die();
}
