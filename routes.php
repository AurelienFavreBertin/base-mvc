<?php

// Create Router instance
$router = new Router();

$router->get('/', 'PagesController@home' );
$router->get('/about', 'PagesController@about');
$router->get('/contact', 'PagesController@contact');
$router->post('/form', 'PagesController@traitementForm');

$router->get('add-article', 'ArticlesController@add');
$router->post( 'add-article', 'ArticlesController@save');


// Run it!
$router->run();