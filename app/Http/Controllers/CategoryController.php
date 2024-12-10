<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   // Listar todas las categorías
   public function index()
   {
       return response()->json(Category::all());
   }

   // Crear una nueva categoría
   public function store(Request $request)
   {
       $validatedData = $request->validate([
           'name' => 'required|string|max:255|unique:categories',
           'description' => 'required|string|max:1000',
       ]);

       $category = Category::create($validatedData);

       return response()->json($category, 201);
   }

   // Mostrar una categoría por ID
   public function show($id)
   {
       $category = Category::find($id);

       if (!$category) {
           return response()->json(['message' => 'Categoría no encontrada'], 404);
       }

       return response()->json($category);
   }

   // Actualizar una categoría
   public function update(Request $request, $id)
   {
       $category = Category::find($id);

       if (!$category) {
           return response()->json(['message' => 'Categoría no encontrada'], 404);
       }

       $validatedData = $request->validate([
           'name' => 'sometimes|string|max:255|unique:categories,name,' . $id,
           'description' => 'sometimes|string|max:1000',
       ]);

       $category->update($validatedData);

       return response()->json($category);
   }

   // Eliminar una categoría
   public function destroy($id)
   {
       $category = Category::find($id);

       if (!$category) {
           return response()->json(['message' => 'Categoría no encontrada'], 404);
       }

       $category->delete();

       return response()->json(['message' => 'Categoría eliminada']);
   }
}
