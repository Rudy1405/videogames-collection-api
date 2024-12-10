<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Campos asignables masivamente
    protected $fillable = [
        'full_name',
        'nickname',
        'email',
        'password',
        'description',
        'profile_image',
        'personal_collection',
    ];

    // Ocultar campos sensibles al serializar el modelo
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Cast de los campos para tipos específicos
    protected $casts = [
        'email_verified_at' => 'datetime',
        'personal_collection' => 'array', // Convierte automáticamente el campo JSON en un array
    ];

    // Relación con videojuegos de Xbox
    public function xboxGames()
    {
        return $this->belongsToMany(XboxGame::class, 'personal_collection', 'user_id', 'xbox_game_id');
    }

    // Relación con videojuegos de PS5
    public function ps5Games()
    {
        return $this->belongsToMany(PS5Game::class, 'personal_collection', 'user_id', 'ps5_game_id');
    }
}
