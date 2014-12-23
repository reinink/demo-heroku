<?php

try {
    include 'vendor/autoload.php';

    $request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

    $glide = new Glide\Server('images', 'cache');
    $glide->setMaxImageSize(2000*2000);
    $glide->output(
        $request->getPathInfo(),
        $request->query->all()
    );

} catch (Exception $e) {
    echo $e->getMessage();
}
