<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\XboxGameController;
use App\Http\Controllers\PS5GameController;
use App\Http\Controllers\GameInfoController;
use App\Http\Controllers\ImageUploadController;


Route::post('login', [UserController::class, 'login']);

Route::apiResource('users', UserController::class);
/*
GET /api/users: Devuelve todos los usuarios.
POST /api/users: Crea un nuevo usuario (envía los datos necesarios en el cuerpo de la solicitud).
GET /api/users/{id}: Devuelve un usuario por ID.
PUT /api/users/{id}: Actualiza un usuario existente.
DELETE /api/users/{id}: Elimina un usuario por ID.
*/
Route::apiResource('categories', CategoryController::class);
/*
GET /api/categories: Devuelve todas las categorías.
POST /api/categories: Crea una nueva categoría (requiere name y description en el cuerpo de la solicitud).
GET /api/categories/{id}: Devuelve una categoría específica por ID.
PUT /api/categories/{id}: Actualiza una categoría existente.
DELETE /api/categories/{id}: Elimina una categoría por ID
*/
Route::apiResource('xbox-games', XboxGameController::class);
/*
GET /api/xbox-games: Devuelve todas las categorías.
POST /api/xbox-games: Crea una nueva categoría (requiere name y description en el cuerpo de la solicitud).
GET /api/xbox-games/{id}: Devuelve una categoría específica por ID.
PUT /api/xbox-games/{id}: Actualiza una categoría existente.
DELETE /api/xbox-games/{id}: Elimina una categoría por ID
*/
Route::apiResource('ps5-games', PS5GameController::class);
/*
GET /api/ps5-games: Devuelve todos los videojuegos de PS5.
POST /api/ps5-games: Crea un nuevo videojuego (requiere los datos necesarios en el cuerpo de la solicitud).
GET /api/ps5-games/{id}: Devuelve un videojuego específico por ID.
PUT /api/ps5-games/{id}: Actualiza un videojuego existente.
DELETE /api/ps5-games/{id}: Elimina un videojuego por ID.
*/
Route::apiResource('game-info', GameInfoController::class);
/*
GET /api/game-info: Devuelve toda la información de videojuegos.
POST /api/game-info: Crea nueva información (requiere general_rating y, opcionalmente, user_comments).
GET /api/game-info/{id}: Devuelve la información específica por ID.
PUT /api/game-info/{id}: Actualiza información existente.
DELETE /api/game-info/{id}: Elimina información por ID.
*/

Route::post('upload-image', [ImageUploadController::class, 'upload']);
// POST /api/upload-image archivo jgp o png y menor a 5mb