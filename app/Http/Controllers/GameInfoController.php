<?php

namespace App\Http\Controllers;

use App\Models\GameInfo;
use Illuminate\Http\Request;

class GameInfoController extends Controller
{
      // Listar toda la información de videojuegos
      public function index()
      {
          return response()->json(GameInfo::all());
      }
  
      // Crear nueva información de videojuego
      public function store(Request $request)
      {
          $validatedData = $request->validate([
              'general_rating' => 'required|numeric|min:0|max:5',
              'user_comments' => 'nullable|json',
          ]);
  
          $info = GameInfo::create($validatedData);
  
          return response()->json($info, 201);
      }
  
      // Mostrar información específica por ID
      public function show($id)
      {
          $info = GameInfo::find($id);
  
          if (!$info) {
              return response()->json(['message' => 'Información no encontrada'], 404);
          }
  
          return response()->json($info);
      }
  
      // Actualizar información de un videojuego
      public function update(Request $request, $id)
      {
          $info = GameInfo::find($id);
  
          if (!$info) {
              return response()->json(['message' => 'Información no encontrada'], 404);
          }
  
          $validatedData = $request->validate([
              'general_rating' => 'sometimes|numeric|min:0|max:5',
              'user_comments' => 'nullable|array',
          ]);
  
          $info->update($validatedData);
  
          return response()->json($info);
      }
  
      // Eliminar información de un videojuego
      public function destroy($id)
      {
          $info = GameInfo::find($id);
  
          if (!$info) {
              return response()->json(['message' => 'Información no encontrada'], 404);
          }
  
          $info->delete();
  
          return response()->json(['message' => 'Información eliminada']);
      }
}
