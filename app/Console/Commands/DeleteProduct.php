<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;
use App\Models\Product;

class DeleteProduct extends Command
{
    protected $signature = 'product:delete {id}';
    protected $description = 'Delete a product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $id = $this->argument('id');
        $product = Product::find($id);
        app(ProductService::class)->deleteProduct($product);
        $this->info('Product deleted successfully.');
    }
}
