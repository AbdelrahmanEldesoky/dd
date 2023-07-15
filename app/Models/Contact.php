<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{

    protected $table = 'contact';
    protected $guarded = [];

    public function class(): HasMany
    {
        return $this->hasMany(Classes::class,'year_id');
    }

    public function material(): HasMany
    {
        return $this->hasMany(Material::class,'year_id');
    }

}
