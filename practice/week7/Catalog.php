<?php

class Catalog
{
    # Properties
    public $products = [];
    

    # Methods
    # magic function - built into php - automatically invoked in certain circumstances
    public function __construct($dataSource)
    {
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json, true);
    }
    public function getAll()
    {
        return $this->products;
    }

    public function getByID(int $id)
    {
        return $this->products[$id];
    }

    public function searchByName(string $term)
    {
        $results = [];
        foreach ($this->products as $product) {
            if (strstr(strtolower($product['name']), strtolower($term))) {
                $results[] = $product;
            }
        }

        return $results;
    }
}