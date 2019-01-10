<?php

namespace App\Services;

use App\Helpers\SearchHelper;
use App\Models\News;
use Carbon\Carbon;

class NewsService
{
    /**
     * @return mixed
     */
    public static function getNews()
    {
        $news = new News;
        $appends = [];
        $columns = [
            'id',
            'title',
            'slug',
            'author',
            'intro',
            'full',
            'status',
            'source',
        ];
        if (isset(request()->key)) {
            $news = $news->where(function ($query) use ($columns) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'like', '%' . SearchHelper::escapeLike(request()->key) . '%');
                }
            });
            $appends['key'] = request()->key;
        };
        return $news->paginate(10)->appends($appends);
    }

    /**
     * @param $perPage
     * @return mixed
     */
    public static function paginateNews($perPage)
    {
        return News::orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * add news
     */
    public static function addNews()
    {
        $news = new News();
        $news->title = request()->txtTitle;
        $news->slug = str_slug(request()->txtTitle, '-');
        $news->author = request()->txtAuth;
        $news->status = request()->slstatus;
        $news->source = request()->txtSource;
        $news->intro = request()->txtIntro;
        $news->full = request()->txtFull;
        $news->cat_id = request()->sltCate;
        $news->user_id = Auth()->user()->id;
        $news->created_at = Carbon::now();

        $f = request()->file('txtimg')->getClientOriginalName();
        $filename = time() . '_' . $f;
        $news->images = $filename;
        request()->file('txtimg')->move('uploads/news/', $filename);

        $news->save();
    }

    /**
     * update news
     * @param $id
     */
    public static function updateNews($id)
    {
        $news = News::find($id);
        $news->title = request()->txtTitle;
        $news->slug = str_slug(request()->txtTitle, '-');
        $news->author = request()->txtAuth;
        $news->status = request()->slstatus;
        $news->source = request()->txtSource;
        $news->intro = request()->txtIntro;
        $news->full = request()->txtFull;
        $news->cat_id = request()->sltCate;
        $news->user_id = Auth()->user()->id;
        $news->created_at = Carbon::now();

        $file_path = public_path('uploads/news/') . $news->images;
        if (request()->hasFile('txtimg')) {
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $file = request()->file('txtimg')->getClientOriginalName();
            $filename = time() . '_' . $file;
            $news->images = $filename;
            request()->file('txtimg')->move('uploads/news/', $filename);
        }

        $news->save();
    }

}
