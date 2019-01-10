<?php

namespace App\Services;

use App\Models\Detail_img;
use App\Models\Products;
use Carbon\Carbon;

class DetailsImageService
{
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
     * insert record to details img table
     * @param $productId
     */
    public static function insertDetailImg($productId)
    {
        $df = request()->file('txtdetail_img');
        foreach ($df as $row) {
            $img_detail = new Detail_img();
            if (isset($row)) {
                $name_img = time() . '_' . $row->getClientOriginalName();
                $img_detail->images_url = $name_img;
                $img_detail->pro_id = $productId;
                $img_detail->created_at = Carbon::now();
                $row->move('uploads/products/details/', $name_img);
                $img_detail->save();
            }
        }
    }

    /**
     * @param $productId
     */
    public static function updateDetailImg($productId)
    {
        $detail = Detail_img::where('pro_id', $productId)->get();
        $df = request()->file('txtdetail_img');
        foreach ($detail as $row) {
            $dt = Detail_img::find($row->id);
            $pt = public_path('uploads/products/details/') . $dt->images_url;
            if (file_exists($pt)) {
                unlink($pt);
            }
            $dt->delete();
        }
        foreach ($df as $row) {
            $img_detail = new Detail_img();
            if (isset($row)) {
                $name_img = time() . '_' . $row->getClientOriginalName();
                $img_detail->images_url = $name_img;
                $img_detail->pro_id = $productId;
                $img_detail->created_at = Carbon::now();
                $row->move('uploads/products/details/', $name_img);
                $img_detail->save();
            }
        }
    }

}