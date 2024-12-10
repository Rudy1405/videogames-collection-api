<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameInfo extends Model
{
    use HasFactory;

    protected $table = 'game_info';

    protected $fillable = [
        'general_rating',
        'user_comments',
    ];

    protected $casts = [
        'user_comments' => 'array', // Convierte automáticamente JSON a array
    ];

}
