<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'pg_page_name',
        'pg_banner_type',
        'slider_id',
        'pg_image_path',
        'pg_image_alt',
        'pg_meta_tag',
        'page_meta_desc_tag',
        'pg_url',
        'status'
    ];

    public function slider()
    {
        return $this->belongsTo('App\Models\Slider');
    }
}
