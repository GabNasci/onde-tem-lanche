<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoryEstablishment extends Model
{
    use HasFactory;

    protected $table = 'categories_establishments';

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class,'establishment_id','id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
