<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validar el archivo
        $request->validate([
            'image' => 'required|mimes:jpg,png|max:5120', // Solo JPG y PNG, máximo 5MB
        ]);

        // Almacenar la imagen
        // Todo hacer que el string que regresa tenga la url del almacenamiento + path
        if ($request->file('image')) {
            $path = $request->file('image')->store('profile_images', 'public');
            return response()->json(['message' => 'Imagen subida exitosamente', 'path' => $path], 201);
        }

        return response()->json(['message' => 'Error al subir la imagen'], 500);
    }
}
