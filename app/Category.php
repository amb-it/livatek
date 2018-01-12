<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    public static function getCategoriesTree()
    {
        $categories = DB::table('categories')->get();

        $categories_tree = [];

        foreach ($categories as $category) {
            if (!$category->parent_id) {
                $categories_tree[$category->id] = (array) $category;
                unset($categories_tree[$category->id]['parent_id']);
            } else {
                $categories_tree[$category->parent_id]['subcategories'][$category->id] = (array) $category;
            }
        }

        return $categories_tree;
    }

    public static function getCategoryWithSubcategories($id)
    {
        $category = self::find($id);

        if (empty($category)) {
            return null;
        }

        $category->toArray();

        if ($category->parent_id) {
            return null;
        }

        $category['subcategories'] = self::where('parent_id', $category->id)->get();

        return $category;
    }
}
