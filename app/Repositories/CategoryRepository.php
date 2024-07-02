<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function create(array $data)
    {
        return Category::create($data);
    }

    public function delete(Category $category)
    {
        return $category->delete();
    }

    public function getAll()
    {
        return Category::all();
    }
}


?>