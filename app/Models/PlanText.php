<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PlanText extends Model
{

    protected $table = 'plan_text';
    protected $guarded = [];

    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);

    }

}
