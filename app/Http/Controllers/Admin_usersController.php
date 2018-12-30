<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Models\User;

class Admin_usersController extends Controller
{
    public function getList()
   {
   		$data = User::where('role', Role::SUPER_USER)->paginate(10);
    	return view('back-end.admin_mem.list',['data'=>$data]);
   }

   public static function getEdit($id)
   {
       $data = User::where('id', $id)->first();
       return view('back-end.admin_mem.edit', ['data' => $data]);
   }
}
