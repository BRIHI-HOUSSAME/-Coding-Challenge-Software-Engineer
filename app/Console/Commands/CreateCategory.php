<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CategoryService;

class CreateCategory extends Command
{
    protected $signature = 'category:create {name} {parent_id?}';
    protected $description = 'Create a new category';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');
        $parentId = $this->argument('parent_id');
        app(CategoryService::class)->createCategory(['name' => $name, 'parent_id' => $parentId]);
        $this->info('Category created successfully.');
    }
}
