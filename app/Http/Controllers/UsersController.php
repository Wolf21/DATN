<?php

namespace App\Http\Controllers;

use App\Enums\Role;

use App\Models\Oders;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList()
    {
        $data = User::where('role', Role::USER)
            ->paginate(10);
        return view('back-end.users.list', ['data' => $data]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $data = User::where('id', $id)->first();
        return view('back-end.users.edit', ['data' => $data]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function getDelete($id)
    {
        $user = User::join('orders', 'users.id', '=', 'orders.c_id')
            ->where('users.id', $id)
            ->where('orders.status', 0)
            ->get();
        if (!count($user)) {
            User::find($id)->delete();
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Xóa user ' . $id . ' thành công !'
                ]);
        } else {
            return redirect()->back()
                ->with([
                    'flash_level' => 'result_msg',
                    'flash_massage' => 'Không thể Xóa user ' . $id . ' vì còn đơn hàng chưa xác nhận !'
                ]);
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function getUserInfo()
    {
        $orders = Oders::where('c_id', Auth()->user()->id)->get();
        return view('member.user', ['data' => $orders]);
    }
}
