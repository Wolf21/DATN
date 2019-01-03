<?php

namespace App\Http\Controllers;

use App\Enums\Categories;
use App\Models\Category;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\EditNewsRequest;

use App\Http\Requests;
use Auth;
use DateTime, File, Input, DB;

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
     * @param AddNewsRequest $rq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdd(AddNewsRequest $rq)
    {
        $n = new News();
        $n->title = $rq->txtTitle;
        $n->slug = str_slug($rq->txtTitle, '-');
        $n->author = $rq->txtAuth;
        $n->status = $rq->slstatus;
        $n->source = $rq->txtSource;
        $n->intro = $rq->txtIntro;
        $n->full = $rq->txtFull;
        $n->cat_id = $rq->sltCate;
        $n->user_id = Auth()->user()->id;
        $n->created_at = new datetime;

        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time() . '_' . $f;
        $n->images = $filename;
        $rq->file('txtimg')->move('uploads/news/', $filename);

        $n->save();
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
     * @param EditNewsRequest $rq
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(EditNewsRequest $rq, $id)
    {
        $n = News::find($id);
        $n->title = $rq->txtTitle;
        $n->slug = str_slug($rq->txtTitle, '-');
        $n->author = $rq->txtAuth;
        $n->status = $rq->slstatus;
        $n->source = $rq->txtSource;
        $n->intro = $rq->txtIntro;
        $n->full = $rq->txtFull;
        $n->cat_id = $rq->sltCate;
        $n->user_id = Auth()->user()->id;
        $n->created_at = new datetime;

        $file_path = public_path('uploads/news/') . $n->images;
        if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $n->images = $filename;
            $rq->file('txtimg')->move('uploads/news/', $filename);
        }

        $n->save();
        return redirect('admin/news')
            ->with(['flash_level' => 'result_msg', 'flash_massage' => ' Đã sửa thành công !']);
    }

    public function getDelete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()
            ->with(['flash_level' => 'result_msg', 'flash_massage' => 'Đã xóa !']);
    }
}
