<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
{
    if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
        return redirect()->route('404');
    }
    elseif ($this->isHttpException($exception)) {
        return $this->renderHttpException($exception);
    }
    elseif ($exception instanceof \ErrorException) {
        return redirect()->route('500');
    }

    return parent::render($request, $exception);

}
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
}
