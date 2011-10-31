<?php
require_once __DIR__.'/silex.phar'; 

$app = new Silex\Application(); 

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/views',
    'twig.class_path' => __DIR__.'/vendor/twig/lib',
));

$app->get('/hello/{name}', function($name) use($app) { 
    return $app['twig']->render('hello.twig', array(
        'name' => $name,
    ));
}); 

$app->run(); 