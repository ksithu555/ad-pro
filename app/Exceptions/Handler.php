<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Symfony\Component\Mime\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
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
     * @throws \Throwable
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
        // Check if the exception is an instance of PostTooLargeException
        if ($exception instanceof PostTooLargeException) {
            $errorMessage = "アップロードされたファイルが大きすぎます！";
            return response()->view('error-render', compact('errorMessage'));
        }

        if ($exception instanceof InvalidArgumentException) {
            $errorMessage = "無効なファイル形式、\nまたはファイルの容量が制限値を超えています。\nアップロードファイルをご確認してください！";
            return response()->view('error-render', compact('errorMessage'));
        }

        if ($exception instanceof FileNotFoundException) {
            $errorMessage = "お探しのファイルが移動されたか、\n編集されたか、削除された可能性があります！";
            return response()->view('error-render', compact('errorMessage'));
        }

        return parent::render($request, $exception);
    }
}
