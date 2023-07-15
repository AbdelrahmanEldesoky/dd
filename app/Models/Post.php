<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = [];

    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);

    }

}
