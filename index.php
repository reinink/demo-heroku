<?php

use League\Glide\Factories\Server;
use Symfony\Component\HttpFoundation\Request;

try {
    // Include vendor dependencies
    include 'vendor/autoload.php';

    // Configure Glide server
    $glide = Server::create([
        'source' => 'images',
        'cache' => 'cache',
        'max_image_size' => 2000*2000,
    ]);

    // Output image based on current URL
    $glide->outputImage(Request::createFromGlobals());
} catch (Exception $e) {
    echo $e->getMessage();
}
