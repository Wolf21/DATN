<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Models\News;
use App\Models\Products;
use App\Services\CartService;
use App\Services\CategoriesService;
use App\Services\NewsService;
use App\Services\OrderService;
use App\Services\ProductService;
use Auth;
use Cart;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $mobile = ProductService::getProductDetailsByCategories();
        return view('home', ['mobile' => $mobile]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $inputs = $request->only('key');
        $mobile = ProductService::getProductDetailsByCategories();
        if (!count($mobile)) {
            Session::flash('flash_message', 'Không tìm thấy kết quả phù hợp !');
        }
        $data = [
            'mobile' => $mobile,
            'key' => $inputs['key'] ?? ''
        ];
        return view('home', $data);
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
        CartService::addCart($product);
        return redirect()->route('getCart');
    }

    /**
     * @param $id
     * @param $quantity
     * @param $condition
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getUpdateCart($id, $quantity, $condition)
    {
        if ($condition == 'up') {
            $quantity = $quantity + 1;
        } elseif ($condition == 'down') {
            $quantity = $quantity - 1;
        }
        Cart::update($id, $quantity);
        return redirect()->route('getCart');
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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postOrder(Request $request)
    {
        OrderService::saveOrder();
        Cart::destroy();
        return redirect()->route('getCart')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đơn hàng của bạn đã được gửi đi !']);

    }

    /**
     * @param $cat
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCategories($cat)
    {
        $catParent = CategoriesService::getCategoryBySlug($cat);
        if ($cat == Categories::NEWS) {
            $new = NewsService::paginateNews(3);
            $top1 = $new->shift();
            $all = NewsService::paginateNews(5);
            return view('category.news', ['data' => $new, 'hot1' => $top1, 'all' => $all]);
        } else {
            $products = ProductService::getProductByCategory($catParent->id);
            return view('category.mobile', ['products' => $products, 'catParent' => $catParent]);
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
        } else {
            $mobile = Products::where('id', $id)->first();
            $detailImg = ProductService::getDetailImg($id);
            $data = [
                'mobile' => $mobile,
                'detail_img' => $detailImg,
                'product_detail' => $product_details,
                'same_products' => $sameProducts
            ];
            if (empty($mobile)) {
                return view('errors.404');
            } else {
                return view('detail.mobile', [
                    'data' => $data,
                    'slug' => $slug
                ]);
            }
        }
    }
}
