<?php

use League\Glide\ServerFactory;
use Symfony\Component\HttpFoundation\Request;

try {
    // Include vendor dependencies
    include 'vendor/autoload.php';

    // Configure Glide server
    $server = ServerFactory::create([
        'source' => 'images',
        'cache' => 'cache',
        'max_image_size' => 2000*2000,
    ]);

    // Output image based on current URL
    $server->outputImage(Request::createFromGlobals());
} catch (Exception $e) {
    echo $e->getMessage();
}
