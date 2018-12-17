<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Models\News;
use App\Models\Oders;
use App\Models\Oders_detail;
use App\Models\Products;
use App\Services\CategoriesService;
use App\Services\ProductService;
use Illuminate\Http\Request;

use Auth;
use DB, Cart, Datetime;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        list($mobile, $lap, $pc) = ProductService::getProductDetailsByCategories();
        return view('home', ['mobile' => $mobile, 'laptop' => $lap, 'pc' => $pc]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCart()
    {
        $sameProducts = ProductService::getSameProducts();
        return view('detail.card')
            ->with([
                'slug' => 'Chi tiết đơn hàng',
                'sameProducts' => $sameProducts
            ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addCart($id)
    {
        $product = Products::where('id', $id)->first();
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['img' => $product->images]
        ]);
        return redirect()->route('getCart');
    }

    /**
     * @param $id
     * @param $qty
     * @param $dk
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getUpdateCart($id, $qty, $dk)
    {
        if ($dk == 'up') {
            $qt = $qty + 1;
            Cart::update($id, $qt);
            return redirect()->route('getCart');
        } elseif ($dk == 'down') {
            $qt = $qty - 1;
            Cart::update($id, $qt);
            return redirect()->route('getCart');
        } else {
            return redirect()->route('getCart');
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDeleteCart($id)
    {
        Cart::remove($id);
        return redirect()->route('getCart');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function empty()
    {
        Cart::destroy();
        return redirect()->route('index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function getOrder()
    {
        if (Auth::guest()) {
            return redirect('login');
        } else {

            return view('detail.oder')
                ->with('slug', 'Xác nhận');
        }
    }

    /**
     * @param Request $rq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postOrder(Request $rq)
    {
        $oder = new Oders();
        $total = 0;
        foreach (Cart::content() as $row) {
            $total = $total + ($row->qty * $row->price);
        }
        $oder->c_id = Auth::user()->id;
        $oder->qty = Cart::count();
        $oder->sub_total = floatval($total);
        $oder->total = floatval($total);
        $oder->note = $rq->txtnote;
        $oder->status = 0;
        $oder->type = 'cod';
        $oder->created_at = new datetime;
        $oder->save();
        $o_id = $oder->id;

        foreach (Cart::content() as $row) {
            $detail = new Oders_detail();
            $detail->pro_id = $row->id;
            $detail->qty = $row->qty;
            $detail->o_id = $o_id;
            $detail->created_at = new datetime;
            $detail->save();
        }
        Cart::destroy();
        return redirect()->route('getcart')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đơn hàng của bạn đã được gửi đi !']);

    }

    /**
     * @param $cat
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCategories($cat)
    {
        $cat_parent = CategoriesService::getCategoryBySlug($cat);
        if ($cat == Categories::NEWS) {
            $new = DB::table('news')
                ->orderBy('created_at', 'desc')
                ->paginate(3);
            $top1 = $new->shift();
            $all = DB::table('news')
                ->orderBy('created_at', 'desc')
                ->paginate(5);
            return view('category.news', ['data' => $new, 'hot1' => $top1, 'all' => $all]);
        } else {
            $products = ProductService::getProductByCategory($cat_parent->id);
            return view('category.mobile', ['products' => $products]);
        }
    }

    /**
     * @param $cat
     * @param $id
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function detail($cat, $id, $slug)
    {
        $product_details = ProductService::getProductDetailsById($id);
        $sameProducts = ProductService::getSameProducts();
        if ($cat == 'tin-tuc') {
            $new = News::where('id', $id)->first();
            return view('detail.news', ['data' => $new, 'slug' => $slug]);
        } elseif ($cat == 'mobile') {
            $mobile = Products::where('id', $id)->first();
            $detailImg = ProductService::getDetailImg($id);
            $data = [
                'mobile' => $mobile,
                'detail_img' => $detailImg,
                'product_detail' => $product_details,
                'same_products' => $sameProducts
            ];
            if (empty($mobile)) {
                return view('errors.503');
            } else {
                return view('detail.mobile', [
                    'data' => $data,
                    'slug' => $slug
                ]);
            }
        } elseif ($cat == 'laptop') {
            $lap = Products::where('id', $id)->first();
            if (empty($lap)) {
                return redirect()->route('index');
            } else {
                return view('detail.laptop', ['data' => $lap, 'slug' => $slug]);
            }
        } elseif ($cat == 'pc') {
            $pc = Products::where('id', $id)->first();
            if (empty($pc)) {
                return redirect()->route('index');
            } else {
                return view('detail.pc', ['data' => $pc, 'slug' => $slug]);
            }
        } else {
            return redirect()->route('index');
        }
    }
}
