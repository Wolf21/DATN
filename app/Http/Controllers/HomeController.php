<?php

namespace App\Http\Controllers;

use App\Models\Oders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public static function getEdit()
    {
//        $orders = Oders::where('c_id', 1)->first();
        return view('member.user');
    }
}
