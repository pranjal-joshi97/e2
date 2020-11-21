<?php

namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = new Products($this->app->path('database/products.json'));

        return $this->app->view('products.index', [
            'products' => $products->getAll()
        ]);
    }
}