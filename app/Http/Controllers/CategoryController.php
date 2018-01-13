<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Get categories with subcategories in a tree type
     *
     * @return array
     */
    public function getCategoriesTree()
    {
        $categories_tree = Category::getCategoriesTree();

        return $categories_tree;
    }

    /**
     * Get one category with subcategories
     *
     * @param string $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response|array
     */
    public function getCategory(string $id)
    {
        $category = Category::getCategoryWithSubcategories($id);

        if (empty($category)) {
            return response(['Error' => 'Not found'], 404);
        }

        return $category;
    }
}
