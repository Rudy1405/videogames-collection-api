<?php

namespace App\Http\Controllers;

use App\Models\XboxGame;
use Illuminate\Http\Request;

class XboxGameController extends Controller
{
     // Listar todos los videojuegos de Xbox
     public function index()
     {
         return response()->json(XboxGame::with('category')->get());
     }
 
     // Crear un videojuego de Xbox
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
 
         $game = XboxGame::create($validatedData);
 
         return response()->json($game, 201);
     }
 
     // Mostrar un videojuego de Xbox por ID
     public function show($id)
     {
         $game = XboxGame::with('category')->find($id);
 
         if (!$game) {
             return response()->json(['message' => 'Videojuego no encontrado'], 404);
         }
 
         return response()->json($game);
     }
 
     // Actualizar un videojuego de Xbox
     public function update(Request $request, $id)
     {
         $game = XboxGame::find($id);
 
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
 
     // Eliminar un videojuego de Xbox
     public function destroy($id)
     {
         $game = XboxGame::find($id);
 
         if (!$game) {
             return response()->json(['message' => 'Videojuego no encontrado'], 404);
         }
 
         $game->delete();
 
         return response()->json(['message' => 'Videojuego eliminado']);
     }
}
