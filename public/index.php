<?php

require '../vendor/autoload.php';

    $router = new AltoRouter();
    
    define('VIEW_PATH', dirname(__DIR__). '/view');

    $router->map('GET','/blog', function(){
        require VIEW_PATH .'/post/index.php';
    });

    $router->map('GET','/blog/category', function(){
        require VIEW_PATH . '/category/show.php';
    });

    //Verification si URL correspont à un de ces routes
    $match = $router->match();
    $match['target']();
?>