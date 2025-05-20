<?php

namespace App\Http;

use Symfony\Component\HttpKernel\HttpKernel;
use Spatie\Permission;


class Kernel extends HttpKernel{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array<int, class-string>
     */
    protected $middleware = [

        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,

        // \App\Http\Middleware\TrimStrings::class,

        //for producition 
        // \App\Http\Middleware\TrustHosts::class,
        // \App\Http\Middleware\TrustProxies::class,
        // \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        
            
    ];

    /**
     * The application's route middleware.
     *
     * @var array<string, class-string>
     */
    protected $routeMiddleware = [
        
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,

        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        // 'auth' => \App\Http\Middleware\Authenticate::class,
        // 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        // 'password.confirm' => \Illuminate\Auth\Middleware\EnsurePasswordIsSet::class,
    ];

    protected $roleMiddleware =[
        'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
        'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
        'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
    ];
}