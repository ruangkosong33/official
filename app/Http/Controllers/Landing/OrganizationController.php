<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;

class OrganizationController extends Controller
{
    public function index($slug)
    {
        $division = Division::where('slug',$slug)->first();
        $kepalaBidang = $division->employee()->where('level',1)->latest()->first();
        $KepalaSeksi = $division->employee()->where('level',2)->get();
        $staff = $division->employee()->where('level',3)->get();
        $tenagaAlihDaya = $division->employee()->where('level',4)->get();
        return view('landing.pages.organization.index-organization',['division'=>$division]);
    }
}
