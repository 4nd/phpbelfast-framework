<?php
require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\Slim([
    'view' => new \Slim\Views\Smarty(),
    'templates.path' => __DIR__ . '/views'
]);
$view = $app->view();
$view->parserDirectory = __DIR__ . '/tmp/smarty';
$view->parserCompileDirectory = __DIR__ . '/tmp/compiled';
$view->parserCacheDirectory = __DIR__ . '/tmp/cache';
$view->parserExtensions = array(
    __DIR__ . '/vendor/slim/views/Slim/Views/SmartyPlugins',
);

use RedBean_Facade as R;
R::setup("mysql:host=localhost;dbname=phpbelfast", 'phpbelfast', 'demo');

$app->container->set('postRepo', function(){
   return new \PhpBelfast\Repos\PostRepo();
});

