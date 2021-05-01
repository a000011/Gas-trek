<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * ? пути, для которых не нужен токен
     *
     * @var array
     */
    protected $except = [
        '/example'
    ];
}
