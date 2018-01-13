<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    /**
     * @return array
     */
    public static function getCategoriesTree() : array
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

    /**
     * @param string $id
     * @return mixed
     */
    public static function getCategoryWithSubcategories(string $id)
    {
        $category = self::find($id);

        if (empty($category)) {
            return null;
        }

        $category->toArray();
        unset($category['parent_id']);

        if ($category->parent_id) {
            return null;
        }

        $category['subcategories'] = self::where('parent_id', $category->id)->get();

        return $category;
    }
}
