<?php

namespace App\Services;

use App\Models\Pro_details;
use Carbon\Carbon;

class ProductDetailsService
{

    /**
     * insert record to product details table
     * @param $productId
     */
    public static function insertProductDetails($productId)
    {
        $detail = new Pro_details();
        $detail->cpu = request()->txtCpu ?? '';
        $detail->ram = request()->txtRam ?? '';
        $detail->screen = request()->txtScreen ?? '';
        $detail->vga = request()->txtVga ?? '';
        $detail->storage = request()->txtStorage ?? '';
        $detail->exten_memmory = request()->txtExtend ?? '';
        $detail->cam1 = request()->txtCam1 ?? 'không có';
        $detail->cam2 = request()->txtCam2 ?? 'không có';
        $detail->sim = request()->txtSIM ?? '';
        $detail->connect = request()->txtConnect ?? '';
        $detail->pin = request()->txtPin ?? '';
        $detail->os = request()->txtOs ?? '';
        $detail->note = request()->txtNote ?? '';
        $detail->pro_id = $productId;

        if (request()->exten_memmory == '') {
            $detail->exten_memmory = $rq->txtCase ?? 'Không';
        }
        if (request()->pin == '') {
            $detail->pin = 'Không có';
        }
        if (request()->sim == '') {
            $detail->sim = 'Không có';
        }
        if (request()->note == '') {
            $detail->note = 'Không có';
        }

        $detail->created_at = Carbon::now();
        $detail->save();
    }

}