<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $guarded = [];
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('front/img/' . $this->image);

    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }//end fo school

}
