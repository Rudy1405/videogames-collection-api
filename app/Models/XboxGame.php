<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XboxGame extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'developer',
        'release_date',
        'description',
        'image',
        'info_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
