<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;

class CreateProduct extends Command
{
    protected $signature = 'product:create {name} {description} {price} {image} {categories*}';
    protected $description = 'Create a new product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');
        $description = $this->argument('description');
        $price = $this->argument('price');
        $image = $this->argument('image');
        $categories = $this->argument('categories');
        app(ProductService::class)->createProduct(compact('name', 'description', 'price', 'image', 'categories'));
        $this->info('Product created successfully.');
    }
}
