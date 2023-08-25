<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Sk;
use App\Models\Bba;
use App\Models\Law;
use App\Models\Pad;
use App\Models\Sop;
use App\Models\Apbd;
use App\Models\Citykab;
use App\Models\Division;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

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
        $pads = Pad::all();
        $sops = Sop::all();
        $bbas = Bba::all();
        $sks  = Sk::all();
        $apbdsNav = Apbd::all()->groupBy('year');
        View::share([
            'divisions' => $divisions,
            'laws'=>$laws,
            'cityKabs'=>$cityKabs,
            'downloads'=>$downloads,
            'pads'=>$pads,
            'sops'=>$sops,
            'bbas'=>$bbas,
            'sks'=>$sks,
            'apbdsNav'=>$apbdsNav,
        ]);
        return $next($request);
    }
}
