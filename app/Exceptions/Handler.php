<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
        }
//        if ($exception instanceof ModelNotFoundException/* && $request->wantsJson()*/)
//            return response()->json([
//                'state' => false,
//                'message' => 'not found!',
//                'data' => null,
//            ], 404);
//        if (!($exception instanceof \Illuminate\Validation\ValidationException))
//            if (!$this->isHttpException($exception) and !config('app.debug'))
//            {
//                if ($exception->getMessage() != "Unauthenticated.")
//                    //$exception = new \Symfony\Component\HttpKernel\Exception\HttpException(500);
//                    return response()->json([
//                        'state' => false,
//                        'message' => 'server error',
//                        'data' => null
//                    ], 500);
//            }
        return parent::render($request, $exception);
    }
}
