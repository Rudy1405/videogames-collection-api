<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PS5Game extends Model
{
    use HasFactory;

     // Especificar la tabla asociada para evitar error de inferencia de nombre de tabla
    protected $table = 'ps5_games';

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
