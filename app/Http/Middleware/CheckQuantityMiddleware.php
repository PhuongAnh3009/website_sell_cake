<?php

namespace App\Http\Middleware;

use Closure;

class CheckQuantityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $qty = Session('cart')->totalQty;
        if ( $qty >= 3) {
            return $next($request);
        }
        return redirect()->back()->with('notice', 'Quantity is not enough to sell!');
    }
}
