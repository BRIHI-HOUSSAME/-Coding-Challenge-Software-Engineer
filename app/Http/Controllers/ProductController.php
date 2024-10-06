<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use YoucanShop\QueryOption\QueryOptionFactory;

class ProductsController extends Controller
{
    private ProductService $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }

    public function index(Request $request) {
        $queryOption = QueryOptionFactory::createFromIlluminateRequest($request);
        
        // Specify allowed filters based on user roles
        $queryOption->allowedFilters(['category', 'price', 'availability']);

        $products = $this->productService->paginate($queryOption);

        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        // Validate request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
        ]);

        // Call the product service to create a new product
        $this->productService->create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id) {
        $product = $this->productService->findById($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        // Validate request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'availability' => 'required|boolean',
        ]);

        // Call the product service to update the product
        $this->productService->update($id, $validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id) {
        // Call the product service to delete the product
        $this->productService->delete($id);

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
