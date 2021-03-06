<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Response;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        return route('login');
        //abort(Response::HTTP_FORBIDDEN);
        // if (!$request->expectsJson()) {
        //     abort(Response::HTTP_FORBIDDEN);
        //     //return route('login');
        // }
    }
}
