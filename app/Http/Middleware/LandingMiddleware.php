<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;
use App\Models\Division;
use App\Models\Law;
use App\Models\Citykab;
use App\Models\Download;


class LandingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $divisions = Division::all();
        $laws = Law::all();
        $cityKabs = Citykab::all();
        $downloads = Download::all();
        View::share([
            'divisions' => $divisions,
            'laws'=>$laws,
            'cityKabs'=>$cityKabs,
            'downloads'=>$downloads,
        ]);
        return $next($request);
    }
}
