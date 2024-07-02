<?php
namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(array $data)
    {
        return $this->productRepository->create($data);
    }

    public function deleteProduct($product)
    {
        return $this->productRepository->delete($product);
    }

    public function listProducts($sortField, $sortOrder)
    {
        return $this->productRepository->getAll($sortField, $sortOrder);
    }

    public function filterProductsByCategory($categoryId)
    {
        return $this->productRepository->filterByCategory($categoryId);
    }
}

















?>