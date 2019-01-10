<?php

namespace App\Services;

use App\Models\Oders;
use App\Models\Oders_detail;
use App\Models\Products;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderService
{

    /**
     *
     */
    public static function saveOrder()
    {
        $order = new Oders();
        $total = 0;
        foreach (Cart::content() as $row) {
            $total = $total + ($row->qty * $row->price);
        }
        $order->c_id = Auth::user()->id;
        $order->qty = Cart::count();
        $order->sub_total = floatval($total);
        $order->total = floatval($total);
        $order->note = request()->txtnote;
        $order->status = 0;
        $order->type = 'cod';
        $order->created_at = Carbon::now();
        $order->save();

        $o_id = $order->id;
        foreach (Cart::content() as $row) {
            $detail = new Oders_detail();
            $detail->pro_id = $row->id;
            $detail->qty = $row->qty;
            $detail->o_id = $o_id;
            $detail->created_at = Carbon::now();
            $detail->save();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getOrderByUser($id)
    {
        return User::join('orders', 'orders.c_id', '=', 'users.id')
            ->where('orders.id', $id)->first();
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getOrderDetails($id)
    {
        return Products::join('oders_detail', 'products.id', '=', 'oders_detail.pro_id')
            ->groupBy('oders_detail.id')
            ->where('oders_detail.o_id', $id)
            ->get();
    }

    /**
     * @param $id
     */
    public static function updateOrder($id)
    {
        $order = Oders::find($id);
        $order->status = 1;
        $order->save();
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function getOrderProducts($id)
    {
        return Products::join('oders_detail', 'products.id', '=', 'oders_detail.pro_id')
            ->join('orders', 'oders_detail.o_id', '=', 'orders.id')
            ->where('oders_detail.id', $id)
            ->select(
                'oders_detail.*',
                'products.*',
                'orders.status AS order_status'
            )
            ->first();
    }

}