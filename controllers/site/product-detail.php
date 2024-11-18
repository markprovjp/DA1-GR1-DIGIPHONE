<?php

namespace controllers;



class product_detailController
{
    public $url = BASE_URL;

    public function index()
    {
        require_once 'views/site/products/product-detail.php';
    }

    
}