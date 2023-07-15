<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OurFeture extends Model
{

    protected $table = 'our_fetures';
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);
    }

}
