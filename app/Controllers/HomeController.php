<?php
// app/Controllers/HomeController.php

class HomeController
{

    public function index()
    {
        require_once __DIR__ . '/../Views/home.php';
    }

    public function about()
    {
        require_once __DIR__ . '/../Views/about.php';
    }

    public function contact()
    {
        require_once __DIR__ . '/../Views/about.php';
    }


}
