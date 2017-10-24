<?php

namespace Illuminate\Auth\Middleware;

use Closure;
use Sirius\Auth\Contracts\Factory as AuthFactory;

class AuthenticateWithBasicAuth
{
    /**
     * The guard factory instance.
     *
     * @var \Sirius\Auth\Contracts\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Sirius\Auth\Contracts\Factory  $auth
     * @return void
     */
    public function __construct(AuthFactory $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        return $this->auth->guard($guard)->basic() ?: $next($request);
    }
}
