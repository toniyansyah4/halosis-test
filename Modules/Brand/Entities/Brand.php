<?php

namespace Modules\Brand\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Brand\Database\factories\BrandFactory::new();
    }
}
