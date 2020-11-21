<?php

namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__constructs($app);
        $this->products = new Products($this->app->path('database/products.json'));
    }
    public function index()
    {
        $products = new Products($this->app->path('database/products.json'));

        return $this->app->view('products.index', [
            'products' => $this->products->getAll()
        ]);
    }

    public function show()
    {
        $id = $this->app->param('id');

        $product = $this->products->getById($id);

        if (is_null($product)) {
            return $this->app->view('errors.404');
        }

        return $this->app->view('products.show', [
        'product' => $product
    ]);
    }
}