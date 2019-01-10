<?php

namespace App\Services;

use App\Models\Category;
use Carbon\Carbon;

class CategoriesService
{
    /**
     * @param $cat_slug
     * @return mixed
     */
    public static function getCategoryBySlug($cat_slug)
    {
        return Category::where('slug', $cat_slug)
            ->first();
    }

    /**
     * @param $cat_id
     * @return mixed
     */
    public static function getCategoryById($cat_id)
    {
        return Category::where('id', $cat_id)
            ->first();
    }

    /**
     * 
     */
    public static function addCategory()
    {
        $category = new Category();
        $category->parent_id = request()->sltCate;
        $category->name = request()->txtCateName;
        $category->slug = str_slug(request()->txtCateName, '-');
        $category->created_at = Carbon::now();
        $category->save();
    }

    /**
     * @param $category
     */
    public static function updateCategory($category)
    {
        $category->name = request()->txtCateName;
        $category->slug = str_slug(request()->txtCateName, '-');
        $category->parent_id = request()->sltCate;
        $category->updated_at = Carbon::now();
        $category->save();
    }
}
