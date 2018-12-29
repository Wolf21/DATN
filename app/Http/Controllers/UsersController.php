<?php

namespace App\Http\Controllers;

use App\Enums\Role;

use App\Models\Oders;
use App\Models\User;

class UsersController extends Controller
{
    public function getList()
    {
        $data = User::where('role', Role::USER)
            ->paginate(10);
        return view('back-end.users.list', ['data' => $data]);
    }

    public function getEdit($id)
    {
        $data = User::where('id', $id)->first();
        return view('back-end.users.edit', ['data' => $data]);
    }


    public static function getUserInfo()
    {
        $orders = Oders::where('c_id', Auth()->user()->id)->get();
        return view('member.user', ['data' => $orders]);
    }

    public static function postEdit()
    {

    }
}
