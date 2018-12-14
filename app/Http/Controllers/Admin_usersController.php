<?php

namespace App\Http\Controllers;

use App\Models\Admin_users;

class Admin_usersController extends Controller
{
    public function getlist()
   {
   		$data = Admin_users::paginate(10);
    	return view('back-end.admin_mem.list',['data'=>$data]);
   }
}
