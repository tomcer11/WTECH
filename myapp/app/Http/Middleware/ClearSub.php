<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ClearSub
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUrl = $request->url();
        
        //$request = Request::capture(); // Zachytiť aktuálnu požiadavku

        $previousUrl = $request->headers->get('referer'); // Získať predchádzajúcu URL adresu  

        if (Str::contains($previousUrl, 'category') && Str::contains($previousUrl, 'sub-category')) {
            if (Str::contains($currentUrl, 'category') && Str::contains($currentUrl, 'sub-category')) {
                //dd((Str::contains($currentUrl, 'sort')));
                if (!($request->has('sort'))) {
                    Session::forget('selectedBrands');
                    Session::forget('selectedSizes');
                    Session::forget('selectedWheels');
                    Session::forget('priceFrom');
                    Session::forget('priceTo');
                }
            }
        }

        return $next($request);
    }
}
