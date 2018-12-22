<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductsRequest;
use App\Http\Requests\EditProductsRequest;
use App\Http\Requests;
use App\Models\Products;
use App\Models\Category;
use App\Models\Pro_details;
use App\Models\Detail_img;
use Auth;
use DateTime, File, Input, DB;


class ProductsController extends Controller
{
    public function getList($id)
    {
        if ($id != 'all') {
            $pro = Products::join('category', 'products.cat_id', '=', 'category.id')
                ->where('cat_id', $id)
                ->select(
                    'products.*',
                    'category.name AS cat_name'
                )
                ->paginate(10);
            $cat = Category::whereNotIn('parent_id', [0, 4])->get();
            return view('back-end.products.list', ['data' => $pro, 'cat' => $cat, 'loai' => $id]);
        } else {
            $pro = Products::join('category', 'products.cat_id', '=', 'category.id')
                ->select(
                    'products.*',
                    'category.name AS cat_name'
                )
                ->paginate(10);
            $cat = Category::whereNotIn('parent_id', [0, 4])->get();
            return view('back-end.products.list', ['data' => $pro, 'cat' => $cat, 'loai' => $id]);
        }
    }

    public function getAdd($id)
    {
        $loai = Category::where('id', $id)->first();
        $p_id = $loai->parent_id;
        $p_name = Category::where('id', $p_id)->first();
        $cat = Category::where('parent_id', $p_id)->get();
        $pro = Products::all();
        if ($p_id >= 19) {
            return view('back-end.products.pc-add', ['data' => $pro, 'cat' => $cat, 'loai' => $p_name->name]);
        } else {
            return view('back-end.products.add', ['data' => $pro, 'cat' => $cat, 'loai' => $p_name->name]);
        }


    }

    public function postAdd(AddProductsRequest $rq)
    {
        $pro = new Products();

        $pro->name = $rq->txtname;
        $pro->slug = str_slug($rq->txtname, '-');
        $pro->intro = $rq->txtintro;
        $pro->promo1 = $rq->txtpromo1 ?? '';
        $pro->promo2 = $rq->txtpromo2 ?? '';
        $pro->promo3 = $rq->txtpromo3 ?? '';
        $pro->packet = $rq->txtpacket ?? '';
        $pro->r_intro = $rq->txtre_Intro ?? '';
        $pro->review = $rq->txtReview ?? '';
        $pro->tag = $rq->txttag ?? '';
        $pro->price = $rq->txtprice;
        $pro->cat_id = $rq->sltCate;
        $pro->user_id = Auth()->user()->id;
        $pro->created_at = Carbon::now();
        $pro->status = '1';
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time() . '_' . $f;
        $pro->images = $filename;
        $rq->file('txtimg')->move('uploads/products/', $filename);
        $pro->save();
        $pro_id = $pro->id;

        $detail = new Pro_details();

        $detail->cpu = $rq->txtCpu ?? '';
        $detail->ram = $rq->txtRam ?? '';
        $detail->screen = $rq->txtScreen ?? '';
        $detail->vga = $rq->txtVga ?? '';
        $detail->storage = $rq->txtStorage ?? '';
        $detail->exten_memmory = $rq->txtExtend ?? '';
        $detail->cam1 = $rq->txtCam1 ?? '';
        $detail->cam2 = $rq->txtCam2 ?? '';
        $detail->sim = $rq->txtSIM ?? '';
        $detail->connect = $rq->txtConnect ?? '';
        $detail->pin = $rq->txtPin ?? '';
        $detail->os = $rq->txtOs ?? '';
        $detail->note = $rq->txtNote ?? '';
        $detail->pro_id = $pro_id;

        if ($rq->txtCam1 == '') {
            $detail->cam1 = 'không có';
        }
        if ($rq->txtCam2 == '') {
            $detail->cam2 = 'không có';
        }
        if ($rq->exten_memmory == '') {
            $detail->exten_memmory = $rq->txtCase ?? 'Không';
        }
        if ($rq->pin == '') {
            $detail->pin = 'Không có';
        }
        if ($rq->sim == '') {
            $detail->sim = 'Không có';
        }
        if ($rq->note == '') {
            $detail->note = 'Không có';
        }

        $detail->created_at = new datetime;
        $detail->save();

        if ($rq->hasFile('txtdetail_img')) {
            $df = $rq->file('txtdetail_img');
            foreach ($df as $row) {
                $img_detail = new Detail_img();
                if (isset($row)) {
                    $name_img = time() . '_' . $row->getClientOriginalName();
                    $img_detail->images_url = $name_img;
                    $img_detail->pro_id = $pro_id;
                    $img_detail->created_at = new datetime;
                    $row->move('uploads/products/details/', $name_img);
                    $img_detail->save();
                }
            }
        }
        return redirect('admin/product/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);

    }

    public function getDelete($id)
    {
        $detail = Detail_img::where('pro_id', $id)->get();
        foreach ($detail as $row) {
            $dt = Detail_img::find($row->id);
            $pt = public_path('uploads/products/details/') . $dt->images_url;
            // dd($pt);
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

    public function postEdit($id, EditProductsRequest $rq)
    {
        $pro = Products::find($id);

        $pro->name = $rq->txtname;
        $pro->slug = str_slug($rq->txtname, '-');
        $pro->intro = $rq->txtintro ?? '';
        $pro->promo1 = $rq->txtpromo1 ?? '';
        $pro->promo2 = $rq->txtpromo2 ?? '';
        $pro->promo3 = $rq->txtpromo3 ?? '';
        $pro->packet = $rq->txtpacket ?? '';
        $pro->r_intro = $rq->txtre_Intro ?? '';
        $pro->review = $rq->txtReview ?? '';
        $pro->tag = $rq->txttag ?? '';
        $pro->price = $rq->txtprice;
        $pro->cat_id = $rq->sltCate;
        $pro->user_id = Auth()->user()->id;
        $pro->updated_at = Carbon::now();
        $pro->status = '1';
        $file_path = public_path('uploads/products/') . $pro->images;
        if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $pro->images = $filename;
            $rq->file('txtimg')->move('uploads/products/', $filename);
        }
        $pro->save();

        $pro_details = new Pro_details();
        $pro_details->cpu = $rq->txtCpu ?? '';
        $pro_details->ram = $rq->txtRam ?? '';
        $pro_details->screen = $rq->txtScreen ?? '';
        $pro_details->vga = $rq->txtVga ?? '';
        $pro_details->storage = $rq->txtStorage ?? '';
        $pro_details->exten_memmory = $rq->txtExtend ?? '';
        $pro_details->connect = $rq->txtConnect ?? '';
        $pro_details->cam1 = $rq->txtCam1 ?? '';
        $pro_details->cam2 = $rq->txtCam2 ?? '';
        $pro_details->note = $rq->txtNote ?? '';
        $pro_details->pro_id = $id;

        if ($rq->txtSIM == '') {
            $pro_details->sim = 'Không có';
        } else {
            $pro_details->sim = $rq->txtSIM;
        }

        if ($rq->txtPin == '') {
            $pro_details->pin = 'Không có';
        } else {
            $pro_details->pin = $rq->txtPin;
        }
        $pro_details->os = $rq->txtOs;
        $pro_details->updated_at = Carbon::now();

        if ($rq->hasFile('txtdetail_img')) {
            $detail = Detail_img::where('pro_id', $id)->get();
            $df = $rq->file('txtdetail_img');
            foreach ($detail as $row) {
                $dt = Detail_img::find($row->id);
                $pt = public_path('uploads/products/details/') . $dt->images_url;
                // dd($pt);
                if (file_exists($pt)) {
                    unlink($pt);
                }
                $dt->delete();
            }
            foreach ($df as $row) {
                $img_detail = new Detail_img();
                if (isset($row)) {
                    $name_img = time() . '_' . $row->getClientOriginalName();
                    $img_detail->images_url = $name_img;
                    $img_detail->pro_id = $id;
                    $img_detail->created_at = new datetime;
                    $row->move('uploads/products/details/', $name_img);
                    $img_detail->save();
                }
            }
        }
        $pro_details->save();
        return redirect('admin/product/all')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã lưu !']);
    }
}
