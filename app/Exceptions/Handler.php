<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($request->segment(1) == 'api'){
            $statusCodes = [
                401 => 'Unauthorized',
                403 => 'Forbidden',
                404 => 'Not found',
                405 => 'Method not allowed',
                422 => 'Unprocessable entity',
                429 => 'Too many requests',
                500 => 'Server error',
            ];

            $e = parent::render($request, $exception);
            $statusCode = $e->getStatusCode();

            key_exists($statusCode, $statusCodes) ? : $statusCode = 500;

            return response()->json([
                'code' => $statusCode,
                'message' => $statusCodes[$statusCode],
                'description' => $e->getOriginalcontent(),
            ], $statusCode);
        }

        return parent::render($request, $exception);
    }
}
