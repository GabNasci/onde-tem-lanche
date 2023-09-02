<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Establishment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'establishments';

    public function events()
    {
        return $this->hasMany(Event::class, 'establishment_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'establishment_id', 'id');
    }

    public function banners()
    {
        return $this->hasMany(Banner::class, 'establishment_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(CategoryEstablishment::class, 'establishment_id', 'id');
    }
}
