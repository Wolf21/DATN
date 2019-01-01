<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class Admin_usersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList()
    {
        $data = User::where('role', Role::SUPER_USER)->paginate(10);
        return view('back-end.admin_mem.list', ['data' => $data]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function getEdit($id)
    {
        $data = User::where('id', $id)->first();
        return view('back-end.admin_mem.edit', ['data' => $data]);
    }

    /**
     * @param EditUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function postEdit(EditUserRequest $request)
    {
        $inputs = $request->all();
        Input::flash();
        UserService::updateUser($inputs);
        return redirect(route('getMember'))
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Cập nhật thông tin thành công !']);
    }
}
