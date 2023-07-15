<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ServiceFeature extends Model
{

    protected $table = 'service_features';
    protected $guarded = [];


    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);
    }
}
