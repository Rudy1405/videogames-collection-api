<?php

namespace App\Http\Controllers;

use App\Models\PS5Game;
use Illuminate\Http\Request;

class PS5GameController extends Controller
{
     // Listar todos los videojuegos de PS5
     public function index()
     {
         return response()->json(PS5Game::with('category')->get());
     }
 
     // Crear un videojuego de PS5
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'category_id' => 'required|exists:categories,id',
             'developer' => 'required|string|max:255',
             'release_date' => 'required|date',
             'description' => 'required|string',
             'image' => 'required|string',
             'info_id' => 'required|exists:game_info,id',
         ]);
 
         $game = PS5Game::create($validatedData);
 
         return response()->json($game, 201);
     }
 
     // Mostrar un videojuego de PS5 por ID
     public function show($id)
     {
         $game = PS5Game::with('category')->find($id);
 
         if (!$game) {
             return response()->json(['message' => 'Videojuego no encontrado'], 404);
         }
 
         return response()->json($game);
     }
 
     // Actualizar un videojuego de PS5
     public function update(Request $request, $id)
     {
         $game = PS5Game::find($id);
 
         if (!$game) {
             return response()->json(['message' => 'Videojuego no encontrado'], 404);
         }
 
         $validatedData = $request->validate([
             'name' => 'sometimes|string|max:255',
             'category_id' => 'sometimes|exists:categories,id',
             'developer' => 'sometimes|string|max:255',
             'release_date' => 'sometimes|date',
             'description' => 'sometimes|string',
             'image' => 'sometimes|string',
             'info_id' => 'sometimes|exists:game_info,id',
         ]);
 
         $game->update($validatedData);
 
         return response()->json($game);
     }
 
     // Eliminar un videojuego de PS5
     public function destroy($id)
     {
         $game = PS5Game::find($id);
 
         if (!$game) {
             return response()->json(['message' => 'Videojuego no encontrado'], 404);
         }
 
         $game->delete();
 
         return response()->json(['message' => 'Videojuego eliminado']);
     }
}
