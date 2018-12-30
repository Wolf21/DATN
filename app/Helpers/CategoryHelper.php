<?php

namespace App\Helpers;


use App\Models\Category;

class CategoryHelper
{
    /**
     * @param $parent_id
     * @return string
     */
    public static function getCatParentName($parent_id)
    {
        if (!$parent_id) {
            return 'ROOT';
        } else {
            $category = Category::where('id', $parent_id)->select('name')->first();
            return $category->name;
        }
    }
}
