<?php

namespace App\Models\Classes;

use App\Models\Traits\Modifier;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BaseAuth extends Authenticatable
{
    use Modifier;

    protected $guarded = [
        'created_uid',
        'updated_uid'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
