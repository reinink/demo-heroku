<?php

use League\Glide\Factory as GlideFactory;
use Symfony\Component\HttpFoundation\Request;

try {
    // Include vendor dependencies
    include 'vendor/autoload.php';

    // Create request object
    $request = Request::createFromGlobals();

    // Configure Glide server
    $glide = GlideFactory::server([
        'source' => 'images',
        'cache' => 'cache',
        'max_image_size' => 2000*2000,
    ]);

    // Output image based on current URL
    $glide->outputImage(
        $request->getPathInfo(),
        $request->query->all()
    );
} catch (Exception $e) {
    echo $e->getMessage();
}
