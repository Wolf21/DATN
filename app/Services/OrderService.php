<?php

namespace App\Services;
use App\Models\Oders;
use App\Models\Oders_detail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderService
{

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

}