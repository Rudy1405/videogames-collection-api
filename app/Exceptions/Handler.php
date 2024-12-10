<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Verificar si es una solicitud API
        if ($request->expectsJson()) {
            // Manejar errores de validación
            if ($exception instanceof \Illuminate\Validation\ValidationException) {
                return response()->json([
                    'message' => 'Validación fallida',
                    'errors' => $exception->errors(),
                ], 422);
            }

            // Manejar errores HTTP genéricos
            if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
                return response()->json([
                    'message' => $exception->getMessage(),
                ], $exception->getStatusCode());
            }

            // Manejar otros errores
            return response()->json([
                'message' => $exception->getMessage(),
            ], 500);
        }

        // Renderizado por defecto (HTML) para otras solicitudes
        return parent::render($request, $exception);
    }
}
