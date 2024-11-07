<?php

namespace controllers;



class homeController
{
    public $url = BASE_URL;

    public function index()
    {
        require_once 'views/site/home/index.php';
    }

    
}