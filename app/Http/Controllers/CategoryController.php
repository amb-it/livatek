<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function getCategoriesTree()
    {
        $categories_tree = Category::getCategoriesTree();

        return $categories_tree;
    }

    public function getCategory($id)
    {
        $category = Category::getCategoryWithSubcategories($id);

        if (empty($category)) {
            return response(['Error' => 'Not found'], 404);
        }

        return $category;
    }
}
