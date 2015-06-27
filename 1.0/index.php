<?php

// Include vendor dependencies
include 'vendor/autoload.php';

try {
    // Configure Glide server
    $server = League\Glide\ServerFactory::create([
        'source' => '../images',
        'cache' => '../images/.cache/1.0',
        'response' => new League\Glide\Responses\SymfonyResponseFactory(),
        'base_url' => 'img',
        'max_image_size' => 2000 * 2000,
    ]);

    // Create request
    $request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

    // Output image based on current URL
    $server->outputImage(
        $request->getPathInfo(),
        $request->query->all()
    );
} catch (Exception $e) {
    echo $e->getMessage();
}
