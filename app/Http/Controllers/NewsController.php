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
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Input;

class NewsController extends Controller
{
    /**
     * @param Request $request
     * @return Factory|View
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
     * @return Factory|View
     */
    public function getAdd()
    {
        $cat = Category::where('parent_id', Categories::NEWS_ID)->get();
        return view('back-end.news.add', ['cat' => $cat]);
    }

    /**
     * @param AddNewsRequest $request
     * @return RedirectResponse
     */
    public function postAdd(AddNewsRequest $request)
    {
        NewsService::addNews();
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã thêm thành công !']);
    }

    /**
     * @param $id
     * @return Factory|View
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
     * @return RedirectResponse
     */
    public function postEdit(EditNewsRequest $request, $id)
    {
        NewsService::updateNews($id);
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa thành công !']);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function getDelete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Đã xóa !']);
    }
}
