<?php

namespace App\Http\Middleware;

use App\Enum\Roles;
use App\Models\User;
use Closure;
use Spatie\Permission\Models\Role;

class AdminMiddleware
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
        $user = User::whereEmail($request->input('email'))->first();
        if (!$user) {
            $errors = ['email' => trans('auth.failed')];

            if ($request->expectsJson()) {
                return response()->json($errors, 422);
            }
            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors($errors);

        } elseif (!$user->hasRole(Role::findByName(Roles::ADMIN))) {
            $errors = ['email' => trans('auth.failed')];

            if ($request->expectsJson()) {
                return response()->json($errors, 422);
            }
            return redirect()->to('/');
        }
        return $next($request);
    }
}
