<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use YoucanShop\QueryOption\QueryOption;

class ProductService
{
    protected ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function paginate(QueryOption $queryOption) {
        return $this->productRepository->paginate($queryOption);
    }

    public function create(array $data) {
        // Implement logic to create a product
        return $this->productRepository->create($data);
    }

    public function findById($id) {
        // Implement logic to find a product by ID
        return $this->productRepository->find($id);
    }

    public function update($id, array $data) {
        // Implement logic to update a product
        return $this->productRepository->update($id, $data);
    }

    public function delete($id) {
        // Implement logic to delete a product
        return $this->productRepository->delete($id);
    }
}
