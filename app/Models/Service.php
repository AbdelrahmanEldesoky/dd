<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);
    }


}
