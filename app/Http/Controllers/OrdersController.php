<?php

namespace App\Http\Controllers;

use App\Models\Oders;
use App\Models\Oders_detail;
use App\Models\User;
use App\Services\OrderService;
use DB;

class OrdersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList()
    {
        $data = User::join('orders', 'orders.c_id', '=', 'users.id')
            ->orderby('orders.created_at', 'DESC')
            ->paginate(10);
        return view('back-end.orders.list', ['data' => $data]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDetail($id)
    {
        $order = OrderService::getOrderByUser($id);
        $data = OrderService::getOrderDetails($id);
        return view('back-end.orders.detail', ['data' => $data, 'oder' => $order]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDetail($id)
    {
        OrderService::updateOrder($id);
        return redirect('admin/order')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã xác nhận đơn hàng thành công !']);

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteOrderDetails($id)
    {
        $order = OrderService::getOrderProducts($id);
        $subPrice = $order->price * $order->qty;
        $newPrice = Oders::find($order->o_id)->total - $subPrice;
        // case sản phẩm vẫn còn hàng
        if ($order->status) {
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Không thể hủy sản phẩm có mã số chi tiết đơn hàng là: ' . $id . ' vì vẫn còn hàng !'
                ]);
        } elseif ($order->order_status) { // case đơn hàng đã được xác nhận
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Không thể hủy sản phẩm có mã số chi tiết đơn hàng là: ' . $id . ' vì đơn hàng đã được xác nhận !'
                ]);
        } else {    // case có thể remove sản phẩm khỏi đơn hàng
            $order = Oders_detail::find($id);
            Oders::find($order->o_id)->update(['total' => $newPrice]);
            $order->delete();
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Đã hủy bỏ sản phẩm có mã số chi tiết đơn hàng:  ' . $id . ' !'
                ]);
        }
    }
}
