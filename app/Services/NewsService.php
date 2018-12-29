<?php

namespace App\Services;

use App\Helpers\SearchHelper;
use App\Models\News;

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
}
