<?php

namespace App\Services;


use App\Helpers\SearchHelper;
use App\Models\Products;

class ProductService
{

    /**
     * get product to show in index
     * @return mixed
     */

    public static function getProductDetailsByCategories()
    {
        $select = [
            'pro_details.cpu',
            'pro_details.ram',
            'pro_details.screen',
            'pro_details.vga',
            'pro_details.storage',
            'pro_details.exten_memmory',
            'pro_details.cam1',
            'pro_details.cam2',
            'pro_details.sim',
            'pro_details.connect',
            'pro_details.pin',
            'pro_details.os',
            'pro_details.note'
        ];
        //get columns to query search
        $column = [
            'products.name',
            'products.promo1',
            'products.promo2',
            'products.promo3',
            'products.packet',
            'products.r_intro',
            'products.review',
            'products.tag',
            'products.price',
        ];
        $columns = array_merge($select, $column);
        $select = array_merge($select, ['products.*', 'category.id as cat_id']);
        $appends = [];
        $products = Products::join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->whereNotIn('category.parent_id', [0, 4]);

        //case search product
        if (isset(request()->key)) {
            $products = $products->where(function ($query) use ($columns) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'like', '%' . SearchHelper::escapeLike(request()->key) . '%');
                }
            });
            $appends['key'] = request()->key;
        };

        $products = $products->select($select)->orderby('created_at', 'DESC')
            ->paginate(9)->appends($appends);
        return $products;
    }

    /**
     * @return mixed
     */
    public static function getSameProducts()
    {
        return Products::join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id', '=', '1')
            ->select('products.*', 'pro_details.cpu', 'pro_details.ram', 'pro_details.screen', 'pro_details.vga', 'pro_details.storage', 'pro_details.exten_memmory', 'pro_details.cam1', 'pro_details.cam2', 'pro_details.sim', 'pro_details.connect', 'pro_details.pin', 'pro_details.os', 'pro_details.note')
            ->paginate(2);
    }

    /**
     * @param $product_id
     * @return mixed
     */
    public static function getDetailImg($product_id)
    {
        return Products::join('detail_img', 'products.id', '=', 'detail_img.pro_id')
            ->where('products.id', $product_id)
            ->get();
    }

    /**
     * @param $product_id
     * @return array
     */
    public static function getProductDetailsById($product_id)
    {
        return Products::join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('products.id', '=', $product_id)
            ->select('products.*', 'pro_details.cpu', 'pro_details.ram', 'pro_details.screen', 'pro_details.vga', 'pro_details.storage', 'pro_details.exten_memmory', 'pro_details.cam1', 'pro_details.cam2', 'pro_details.sim', 'pro_details.connect', 'pro_details.pin', 'pro_details.os', 'pro_details.note')
            ->first();
    }

    /**
     * @param $cat_parent_id
     * @return mixed
     */
    public static function getProductByCategory($cat_parent_id)
    {
        return Products::join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id', '=', $cat_parent_id)
            ->select(
                'products.*',
                'pro_details.cpu',
                'pro_details.ram',
                'pro_details.screen',
                'pro_details.vga',
                'pro_details.storage',
                'pro_details.exten_memmory',
                'pro_details.cam1', 'pro_details.cam2',
                'pro_details.sim',
                'pro_details.connect',
                'pro_details.pin',
                'pro_details.os',
                'pro_details.note'
            )->paginate(12);
    }

    /**
     * get product to show in product management
     * @param $id
     * @return mixed
     */
    public static function getListProduct($id)
    {
        $products = Products::join('category', 'products.cat_id', '=', 'category.id');
        $select = [
            'products.*',
            'category.name AS cat_name'
        ];
        $columns = [
            'category.name',
            'products.id',
            'products.name',
            'products.intro',
            'products.price',
        ];
        $appends = [];
        //case search all
        if ($id != 'all') {
            $products = $products->where('category.id', $id);
        }
        //case search with key
        if (isset(request()->key)) {
            $products = $products->where(function ($query) use ($columns) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'like', '%' . SearchHelper::escapeLike(request()->key) . '%');
                }
            });
            $appends['key'] = request()->key;
        };

        $products = $products->select($select)
            ->paginate(10)
            ->appends($appends);
        return $products;
    }
}
