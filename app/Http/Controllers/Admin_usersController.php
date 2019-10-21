<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class Admin_usersController extends Controller
{
    /**
     * @return Factory|View
     */
    public function getList()
    {
        $data = User::where('role', Role::SUPER_USER)->paginate(10);
        return view('back-end.admin_mem.list', ['data' => $data]);
    }

    /**
     * @param $id
     * @return Factory|View
     */
    public static function getEdit($id)
    {
        $data = User::where('id', $id)->first();
        return view('back-end.admin_mem.edit', ['data' => $data]);
    }

    /**
     * @param EditUserRequest $request
     * @return RedirectResponse
     */
    public static function postEdit(EditUserRequest $request)
    {
        $inputs = $request->all();
        Input::flash();
        UserService::updateUser($inputs);
        return redirect(route('getMember'))
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Cập nhật thông tin thành công !']);
    }

    public static function getDelete($id)
    {
        User::find($id)->delete();
        return redirect()->back()
            ->with([
                'flash_level' => 'result_msg',
                'flash_massage' => 'Xóa nhân viên có id: ' . $id . ' thành công !'
            ]);
    }
}
