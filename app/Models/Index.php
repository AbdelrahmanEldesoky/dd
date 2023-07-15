<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Index extends Model
{

    protected $table = 'indexs';
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);
    }

}
