<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$images = [
    ['num' => '1', 'url' => 'img/small/img1'],
    ['num' => '2', 'url' => 'img/small/img2'],
    ['num' => '3', 'url' => 'img/small/img3'],
    ['num' => '4', 'url' => 'img/small/img4'],
    ['num' => '5', 'url' => 'img/small/img5'],
    ['num' => '6', 'url' => 'img/small/img6'],
    ['num' => '7', 'url' => 'img/small/img7'],
    ['num' => '8', 'url' => 'img/small/img8'],
    ['num' => '9', 'url' => 'img/small/img9']
];

try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('gallery.tmpl');

    echo $template->render(array (
        'image' => $images,
        'updated' => date('Y.m.D')
    ));

} catch (Exception $e){
    die ('ERROR: ' . $e->getMessage());
}

