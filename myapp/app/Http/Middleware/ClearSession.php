<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ClearSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUrl = $request->url();

        $id = $request->route('id');
        $s_id = $request->route('s_id');
        
        //$request = Request::capture(); // Zachytiť aktuálnu požiadavku

        $previousUrl = $request->headers->get('referer'); // Získať predchádzajúcu URL adresu   

        // if (Str::contains($previousUrl, 'detail')) {
            
        // }


        if (Str::contains($previousUrl, 'category') && Str::contains($previousUrl, 'sub-category')) {
            if (!(Str::contains($currentUrl, 'category') && Str::contains($currentUrl, 'sub-category'))) {
                Session::forget('selectedBrands');
                Session::forget('selectedSizes');
                Session::forget('selectedWheels');
            }
            
        }

        

        
        
        
        
        
        
        
        // // Získanie predchádzajúcej URL adresy z session
        // $previousUrl = Session::get('previousUrl');

        // // Získanie aktuálnej URL adresy
        

        // $filterRoute = '/\/category\/\d+\/sub-category\/\d+/';

        // $detailRoute = '/\/category\/\d+\/sub-category\/\d+\/detail\/\d+/';

        // // Ak currentURL je stránka s filtrom
        // if (preg_match($filterRoute, $currentUrl)) {
        //     // Som na stránke s filtrom a prdošlá stránka je hocijaká ale nie DETAIL 
        //     if (!preg_match($detailRoute, $previousUrl) || !preg_match($filterRoute, $previousUrl)) {
        //         Session::forget('selectedBrands');
        //         Session::forget('sort');
        //     }
        // }
        
        //Session::put('previousUrl', $currentUrl);

        return $next($request);
    }
}
