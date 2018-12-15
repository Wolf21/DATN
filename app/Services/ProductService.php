<?php

namespace App\Services;


use App\Models\Products;

class ProductService
{

    /**
     *
     * @return mixed
     */

    public static function getProductDetailsByCategories()
    {
        $mobile = Products::join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id', '=', '1')
            ->select('products.*', 'pro_details.cpu', 'pro_details.ram', 'pro_details.screen', 'pro_details.vga', 'pro_details.storage', 'pro_details.exten_memmory', 'pro_details.cam1', 'pro_details.cam2', 'pro_details.sim', 'pro_details.connect', 'pro_details.pin', 'pro_details.os', 'pro_details.note')
            ->paginate(9);
        $lap = Products::join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id', '=', '2')
            ->select('products.*', 'pro_details.cpu', 'pro_details.ram', 'pro_details.screen', 'pro_details.vga', 'pro_details.storage', 'pro_details.exten_memmory', 'pro_details.cam1', 'pro_details.cam2', 'pro_details.sim', 'pro_details.connect', 'pro_details.pin', 'pro_details.os', 'pro_details.note')
            ->paginate(6);
        $pc = Products::join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id', '=', '19')
            ->select('products.*', 'pro_details.cpu', 'pro_details.ram', 'pro_details.screen', 'pro_details.vga', 'pro_details.storage', 'pro_details.exten_memmory', 'pro_details.cam1', 'pro_details.cam2', 'pro_details.sim', 'pro_details.connect', 'pro_details.pin', 'pro_details.os', 'pro_details.note')
            ->paginate(4);
        return [$mobile, $lap, $pc];
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

}
