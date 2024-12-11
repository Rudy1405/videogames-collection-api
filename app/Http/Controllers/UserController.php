<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => 'required|email',
             'password' => 'required|string',
         ]);
 
         // Verificar las credenciales
         if (!Auth::attempt($credentials)) {
             return response()->json(['message' => 'Tus Credenciales son incorrectas'], 401);
         }
 
         // Generar token para el usuario autenticado
         $user = Auth::user();
         $token = $user->createToken('auth_token')->plainTextToken;
 
         return response()->json([
             'message' => 'Inicio de sesión exitoso',
             'token' => $token,
             'user' => $user,
         ]);
     }

    public function index()
    {
        return response()->json(User::all());
    }

    // Crear un usuario
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'nickname' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'description' => 'nullable|string',
            'profile_image' => 'nullable|string',
            'personal_collection' => 'nullable|array',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);

        return response()->json($user, 201);
    }

    // Mostrar un usuario por ID
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        return response()->json($user);
    }

    // Actualizar un usuario
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'full_name' => 'sometimes|string|max:255',
            'nickname' => 'sometimes|string|max:50|unique:users,nickname,' . $id,
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:8',
            'description' => 'nullable|string',
            'profile_image' => 'nullable|string',
            'personal_collection' => 'nullable|array',
        ]);

        if (isset($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $user->update($validatedData);

        return response()->json($user);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Usuario eliminado']);
    }
   
}
