<?php

require __DIR__ . '/vendor/autoload.php';


try {

    $isklepAccess = json_decode(file_get_contents(__DIR__ . '/apiAccess.json'), true);

    $prod = new \dq78\isklep_api_client\producer\Producers($isklepAccess);
    $prod->getAll();

} catch (\ErrorException $e) {
    echo 'zgloszono blad <br/>';
    echo $e->getMessage();
    die();
}
