<?php

namespace App\Helpers;


class SearchHelper
{
    /**
     * Helper for search with sql special char (% , _)
     *
     * @param $string
     * @return mixed
     */
    public static function escapeLike($string)
    {
        $search = array('%', '_');
        $replace   = array('\%', '\_');
        return str_replace($search, $replace, $string);
    }
}
