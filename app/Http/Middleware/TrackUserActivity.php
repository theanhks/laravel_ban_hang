<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserActivity;

class TrackUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userId = null;
        $now = now();


        if (auth()->check()) {
            $userId = auth()->user()->id;
        }

        if ($userId) {
            UserActivity::updateOrCreate(
                ['user_id' => $userId],
                ['last_activity' => $now]
            );
        }

        return $next($request);
    }
}
