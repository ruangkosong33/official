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
        // dd($division->employee);
        return view('landing.pages.organization.index-organization',['division'=>$division]);
    }
}
