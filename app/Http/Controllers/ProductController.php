<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Models\Category;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $sortField = $request->get('sortField', 'name');
        $sortOrder = $request->get('sortOrder', 'asc');
        $categoryId = $request->get('category');
        $products = $this->productService->listProducts($sortField, $sortOrder);

        if ($categoryId) {
            $products = $this->productService->filterProductsByCategory($categoryId);
        }

        $categories = Category::all();
        return view('products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'categories' => 'required|array'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $data['image'] = $imagePath;

        $this->productService->createProduct($data);

        return redirect()->route('products.index');
    }
}
