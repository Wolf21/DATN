<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductsRequest;
use App\Http\Requests\EditProductsRequest;
use App\Models\Category;
use App\Models\Detail_img;
use App\Models\Products;
use App\Services\ProductService;
use Auth;
use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Input;


class ProductsController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList(Request $request, $id)
    {
        Session::forget('flash_message');
        $inputs = $request->only('key');
        $products = ProductService::getListProduct($id);
        $cat = Category::whereNotIn('parent_id', [0, 4])->get();
        $data = [
            'data' => $products,
            'cat' => $cat,
            'loai' => $id,
        ];
        $data['key'] = $inputs['key'] ?? '';
        if (!count($products)) {
            Session::flash('flash_message', 'Không tìm thấy kết quả phù hợp !');
        }
        return view('back-end.products.list', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd($id)
    {
        $loai = Category::where('id', $id)->first();
        $p_id = $loai->parent_id;
        $p_name = Category::where('id', $p_id)->first();
        $cat = Category::where('parent_id', $p_id)->get();
        $pro = Products::all();
        return view('back-end.products.add', ['data' => $pro, 'cat' => $cat, 'loai' => $p_name->name]);
    }

    /**
     * @param AddProductsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdd(AddProductsRequest $request)
    {
        ProductService::addProduct();
        return redirect('admin/product/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $detail = Detail_img::where('pro_id', $id)->get();
        foreach ($detail as $row) {
            $dt = Detail_img::find($row->id);
            $pt = public_path('uploads/products/details/') . $dt->images_url;
            if (file_exists($pt)) {
                unlink($pt);
            }
            $dt->delete();
        }
        $pro = Products::find($id);
        $pro->delete();
        return redirect('admin/product/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Đã xóa !']);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $dt = Products::where('id', $id)->first();
        $c_id = $dt->cat_id;
        $loai = Category::where('id', $c_id)->first();
        $p_id = $loai->parent_id;
        $cat = Category::where('parent_id', $p_id)->get();
        $pro = Products::join('pro_details', 'products.id', '=', 'pro_details.pro_id')
            ->where('products.id', $id)->first();
        $detailImg = Detail_img::where('pro_id', $id)->get();
        return view('back-end.products.edit-mobile', [
            'pro' => $pro,
            'cat' => $cat,
            'detailImg' => $detailImg,
            'catId' => $c_id
        ]);
    }

    /**
     * @param $id
     * @param EditProductsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit($id, EditProductsRequest $request)
    {
        ProductService::updateProduct($id);
        return redirect('admin/product/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã lưu !']);
    }
}
