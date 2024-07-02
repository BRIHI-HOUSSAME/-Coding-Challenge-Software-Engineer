<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CategoryService;
use App\Models\Category;

class DeleteCategory extends Command
{
    protected $signature = 'category:delete {id}';
    protected $description = 'Delete a category';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $id = $this->argument('id');
        $category = Category::find($id);
        app(CategoryService::class)->deleteCategory($category);
        $this->info('Category deleted successfully.');
    }
}
