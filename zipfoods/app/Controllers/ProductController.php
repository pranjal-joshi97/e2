<?php

namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->products = new Products($this->app->path('database/products.json'));
    }
    public function index()
    {
        $products = new Products($this->app->path('database/products.json'));

        return $this->app->view('products.index', [
            'products' => $this->products->getAll()
        ]);
    }

    /**
         * GET "/product?id=x"
         * Show an individual product
         */
    public function show()
    {
        $id = $this->app->param('id');

        # If no id is present, send the user to the products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }
        
        # Load the product details
        $product = $this->products->getById($id);

        # If we couldn't find the product, return the "product missing" view
        if (is_null($product)) {
            return $this->app->view('products.missing', ['id' => $id]);
        }

        $name = $this->app->old('name');

        return $this->app->view('products.show', [
            'product' => $product,
            'name' => $name
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'review' => 'required|minLength:200',
        ]);

        # If the above validation fails, the user is redirected back to the product page
        # and none of the following code will execute
        
        # Extract data from the form submission
        $name = $this->app->input('name');
        $review = $this->app->input('review');
        $id = $this->app->input('id');

        $this->app->redirect('/product?id='.$id, ['name' => $name]);
    }
}