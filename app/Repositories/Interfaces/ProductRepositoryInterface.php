<?php
namespace App\Repositories\Interfaces;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(Product $product, array $data);
    public function delete(Product $product);
    public function find($id);
}





















?>