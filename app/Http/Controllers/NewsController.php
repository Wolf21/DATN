<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\EditNewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Services\NewsService;
use Auth;
use DB;
use File;
use Illuminate\Http\Request;
use Input;

class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getList(Request $request)
    {
        $inputs = $request->only('key');
        $data = NewsService::getNews();
        return view('back-end.news.list',
            [
                'data' => $data,
                'key' => $inputs['key'] ?? ''
            ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {
        $cat = Category::where('parent_id', Categories::NEWS_ID)->get();
        return view('back-end.news.add', ['cat' => $cat]);
    }

    /**
     * @param AddNewsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdd(AddNewsRequest $request)
    {
        NewsService::addNews();
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEdit($id)
    {
        $cat = Category::where('parent_id', Categories::NEWS_ID)->get();
        $n = News::where('id', $id)->first();
        return view('back-end.news.edit', ['data' => $n, 'cat' => $cat]);
    }

    /**
     * @param EditNewsRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(EditNewsRequest $request, $id)
    {
        NewsService::updateNews($id);
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa thành công !']);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Đã xóa !']);
    }
}
