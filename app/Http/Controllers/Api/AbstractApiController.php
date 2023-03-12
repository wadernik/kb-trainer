<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractApiController
{
    /**
     * @param array $data
     * @param int $code
     * @param array $headers
     * @return JsonResponse
     */
    protected function responseSuccess(
        array $data = [],
        int $code = Response::HTTP_OK,
        array $headers = []
    ): JsonResponse {
        return response()->json(
            data: $data,
            status: $code,
            headers: $headers
        );
    }

    /**
     * @param int $code
     * @param string|null $message
     * @param array $data
     * @param array $headers
     * @return JsonResponse
     */
    protected function responseError(
        int $code,
        string $message = null,
        array $data = [],
        array $headers = []
    ): JsonResponse {
        return response()->json(
            data: array_merge(
                [
                    'status' => 'Error',
                    'message' => $message,
                ],
                $data,
            ),
            status: $code,
            headers: $headers
        );
    }
}
