<?php

namespace App\Services;

use App\Models\Category;

class CategoriesService
{
    /**
     * @param $cat_slug
     * @return mixed
     */
    public static function getCategoryBySlug($cat_slug)
    {
        return Category::where('slug', $cat_slug)
            ->select('id')
            ->first();
    }
}
