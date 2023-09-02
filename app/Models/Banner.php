<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';

    public function establishment()
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }
}
