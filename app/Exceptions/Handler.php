<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\MassAssignmentException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        // check session timeout or illegal access
        if ($exception instanceof TokenMismatchException) {
            Log::error($exception->getMessage(), $exception->getTrace());
            Session::flash('error', 'ERROR');
            return redirect(route('loginForm'));
        }

        //handler in case errors status code 403, 404, 500, 503
        if (method_exists($exception, 'getStatusCode')) {
            $statusCode = array('401', '403', '404', '500', '503');
            $status = $exception->getStatusCode();
            if (in_array($status, $statusCode)) {
                return response()->view('errors.' . $status);
            }
        }
        //handler if don't have route.
        if ($this->isHttpException($exception)) {
            Log::error($exception->getMessage(), $exception->getTrace());
            return response()->view('errors.404');
        }

        //ページなし
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.500');
        }
        //許可されていないメソッド
        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->view('errors.500');
        }

        if ($exception instanceof \ReflectionException) {
            return response()->view('errors.500');
        }

        if ($exception instanceof \ErrorException) {
            return response()->view('errors.500');
        }

        if ($exception instanceof \FatalErrorException) {
            return response()->view('errors.500');
        }

        if ($exception instanceof \InvalidArgumentException) {
            return response()->view('errors.500');
        }

        if ($exception instanceof MassAssignmentException) {
            return response()->view('errors.500');
        }

        if ($exception instanceof QueryException) {
            return response()->view('errors.500');
        }

        return parent::render($request, $exception);
    }
}
