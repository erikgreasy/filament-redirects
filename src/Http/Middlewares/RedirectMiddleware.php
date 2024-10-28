<?php

namespace Erikgreasy\FilamentRedirects\Http\Middlewares;

use Closure;
use Erikgreasy\FilamentRedirects\Models\Redirect;
use Illuminate\Http\Request;

class RedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $redirect = Redirect::query()
            ->where('pattern', $request->path())
            ->where('is_active', true)
            ->first();

        if (!$redirect) {
            return $next($request);
        }

        $redirect->increment('hit_count');
        $redirect->last_hit_at = now();
        $redirect->save();

        $target = $redirect->target;

        if ($request->getQueryString() && $redirect->keep_query_string) {
            $target .= '?' . $request->getQueryString();
        }

        return redirect($target, $redirect->http_status);
    }
}
