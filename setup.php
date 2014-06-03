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

$env = array();
if(file_exists(__DIR__.'/.env.php')) {
    $env = require __DIR__.'/.env.php';
    foreach($env as $var => $val) {
        $_ENV[$var] = $val;
        $_SERVER[$var] = $val;
    }
}

use RedBean_Facade as R;
R::setup("mysql:host=localhost;dbname=".getenv('DB_NAME'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));

$app->container->set('postRepo', function(){
   return new \PhpBelfast\Repos\PostRepo();
});

