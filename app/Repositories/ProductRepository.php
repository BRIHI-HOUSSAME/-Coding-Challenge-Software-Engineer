<?php

namespace App\Repositories;

use App\Models\Product;
use YoucanShop\QueryOption\Laravel\UsesQueryOption;

class ProductRepository {
    use UsesQueryOption;

    public function paginate(QueryOption $queryOption) {
        $query = Product::query();

        // Pass the query through defined criteria
        [$query, $queryOption] = $this->pipeThroughCriterias($query, $queryOption);

        return $query->paginate(
            $queryOption->getLimit(),
            '*',
            'page',
            $queryOption->getPage()
        );
    }

    public function create(array $data) {
        return Product::create($data);
    }

    public function find($id) {
        return Product::findOrFail($id);
    }

    public function update($id, array $data) {
        $product = $this->find($id);
        $product->update($data);
        return $product;
    }

    public function delete($id) {
        $product = $this->find($id);
        return $product->delete();
    }

    protected function getQueryOptionCriterias(): array {
        return [
            SearchCriteria::class,
            FilterByPriceCriteria::class,
            SortByCriteria::class,
            // Add more criteria classes as needed
        ];
    }
}
