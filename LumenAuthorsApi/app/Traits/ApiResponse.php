<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    // En caso de respuesta correcta
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }
    // En caso de error
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }
}