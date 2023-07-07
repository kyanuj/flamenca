<?php
// app/routes.php

// ruta para manejar los assets
$router->addRoute('/assets/.*', function ($url) use ($router) {
    $router->serveAsset($url);
});

// Puedes agregar todas las rutas que desees aquí...
$router->addRoute('/', 'HomeController@index');
$router->addRoute('/about', 'HomeController@about');
$router->addRoute('/contact', 'HomeController@contact');
$router->addRoute('/products', 'ProductsController@index');
$router->addRoute('/login', 'AuthController@login');
$router->addRoute('/logout', 'AuthController@logout');
$router->addRoute('/admin/dashboard', 'AdminController@dashboard'); // Ruta protegida
