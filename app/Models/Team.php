<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);
    }
}
