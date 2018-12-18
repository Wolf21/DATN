<?php

namespace App\Models\Classes;

use App\Models\Traits\Modifier;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
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
