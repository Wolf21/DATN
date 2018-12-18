<?php

namespace App\Http\Controllers;

use App\Models\Oders;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class OrdersController extends Controller
{
    public function getList()
    {
        $data = Oders::join('users', 'orders.c_id', '=', 'users.id')
            ->paginate(10);
        return view('back-end.orders.list', ['data' => $data]);
    }

    public function getDetail($id)
    {
        $oder = Oders::join('users', 'orders.c_id', '=', 'users.id')
            ->where('orders.id', $id)->first();
        $data = DB::table('oders_detail')
            ->join('products', 'products.id', '=', 'oders_detail.pro_id')
            ->groupBy('oders_detail.id')
            ->where('o_id', $id)
            ->get();
        return view('back-end.orders.detail', ['data' => $data, 'oder' => $oder]);
    }

    public function postDetail($id)
    {
        $oder = Oders::find($id);

        $oder->status = 1;
        $oder->save();
        return redirect('admin/order')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã xác nhận đơn hàng thành công !']);

    }

    public function getDelete($id)
    {
        $oder = Oders::where('id', $id)->first();
        if ($oder->status == 1) {
            return redirect()->back()
                ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Không thể hủy đơn hàng số: ' . $id . ' vì đã được xác nhận!']);
        } else {
            $oder = Oders::find($id);
            $oder->delete();
            return redirect('admin/order')
                ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Đã hủy bỏ đơn hàng số:  ' . $id . ' !']);
        }
    }
}
