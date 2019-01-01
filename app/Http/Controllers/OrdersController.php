<?php

namespace App\Http\Controllers;

use App\Models\Oders;
use App\Models\Oders_detail;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
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
        $oder = User::join('orders', 'orders.c_id', '=', 'users.id')
            ->where('orders.id', $id)->first();
        $data = DB::table('products')
            ->join('oders_detail', 'products.id', '=', 'oders_detail.pro_id')
            ->groupBy('oders_detail.id')
            ->where('oders_detail.o_id', $id)
            ->get();
        return view('back-end.orders.detail', ['data' => $data, 'oder' => $oder]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDetail($id)
    {
        $oder = Oders::find($id);

        $oder->status = 1;
        $oder->save();
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
        $oder = Products::join('oders_detail', 'products.id', '=', 'oders_detail.pro_id')
            ->join('orders', 'oders_detail.o_id', '=', 'orders.id')
            ->where('oders_detail.id', $id)
            ->select(
                'oders_detail.*',
                'products.*',
                'orders.status AS order_status'
            )
            ->first();
        $subPrice = $oder->price * $oder->qty;
        $newPrice = Oders::find($oder->o_id)->total - $subPrice;
        // case sản phẩm vẫn còn hàng
        if ($oder->status) {
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Không thể hủy sản phẩm có mã số chi tiết đơn hàng là: ' . $id . ' vì vẫn còn hàng !'
                ]);
        } elseif ($oder->order_status) { // case đơn hàng đã được xác nhận
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Không thể hủy sản phẩm có mã số chi tiết đơn hàng là: ' . $id . ' vì đơn hàng đã được xác nhận !'
                ]);
        } else {    // case có thể remove sản phẩm khỏi đơn hàng
            $oder = Oders_detail::find($id);
            Oders::find($oder->o_id)->update(['total' => $newPrice]);
            $oder->delete();
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Đã hủy bỏ sản phẩm có mã số chi tiết đơn hàng:  ' . $id . ' !'
                ]);
        }
    }
}
