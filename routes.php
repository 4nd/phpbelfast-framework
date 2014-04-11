<?php

$app->get('/hello/:name', '\PhpBelfast\Controllers\BaseController:hello');

$app->group('/posts', function() use ($app){
    $app->get('/','\PhpBelfast\Controllers\PostController:index');
    $app->get('/:id','\PhpBelfast\Controllers\PostController:item')
        ->conditions(['id' => '[0-9]+'])
        ->name('post-item');
});