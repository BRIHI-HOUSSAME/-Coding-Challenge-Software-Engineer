<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function create(array $data)
    {
        return Product::create($data);
    }

    public function delete(Product $product)
    {
        return $product->delete();
    }

    public function getAll($sortField = 'name', $sortOrder = 'asc')
    {
        return Product::orderBy($sortField, $sortOrder)->paginate(10);
    }

    public function filterByCategory($categoryId)
    {
        return Product::whereHas('categories', function($query) use ($categoryId) {
            $query->where('id', $categoryId);
        })->paginate(10);
    }
}













?>