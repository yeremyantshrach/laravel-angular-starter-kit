<?php

namespace App\Http\Middleware;

use App\Enum\Roles;
use Closure;
use Spatie\Permission\Models\Role;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->user()->hasRole(Role::findById(Roles::ROLE_IDS[Roles::ADMIN]))) {
            auth()->logout();
            return redirect()->to('/');
        }
        return $next($request);
    }
}
