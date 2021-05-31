<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'sl_page_id',
        'sl_banner_image',
        'sl_slider_order',
        'status',
    ];


    public function pages()
    {
        return $this->hasMany('App\Models\Page','id','sl_page_id');
    }
}
