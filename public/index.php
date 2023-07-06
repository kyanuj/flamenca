<?php
// index.php

require_once '../app/Router/Router.php';

$requestUrl = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : '/';

$router = new Router();

require_once '../app/Router/routes.php';

$router->handleRequest($requestUrl);
