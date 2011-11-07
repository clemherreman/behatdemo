<?php

//phpinfo();
require_once __DIR__.'/silex.phar'; 

$app = new Silex\Application();
$app['debug'] = true; 

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/views',
    'twig.class_path' => __DIR__.'/vendor/twig/lib',
));

$app->get('/square', function() use($app) { 
    return $app['twig']->render('square.twig', array(
        'errors'    => false,
        'perimeter' => false,
        'side'      => false,
    ));
});

$app->post('/square', function() use($app) {
  $side = $app['request']->get('side');
  
  if (!is_numeric($side))
  {
    $errors[] = 'Please input a number as side size';
  }
  if ($side == 0)
  {
    $errors[] = "Please input a positive number a side size";
  }
  
  $perimeter = empty($errors) ? $side*4 : null;
  
  return $app['twig']->render('square.twig', array(
    'errors'    => $errors,
    'perimeter' => $perimeter,
    'side'      => $side,
  ));
});

$app->get('/js-square', function() use($app) { 
    return $app['twig']->render('js-square.twig', array(
        'errors'    => false,
        'perimeter' => false,
        'side'      => false,
    ));
});

$app->run(); 