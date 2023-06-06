<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vision;
use App\Models\Formationhistory;

class ProfilController extends Controller
{
    public function vision()
    {
        $vision = Vision::firstOrFail();
        return view('landing.pages.profil.vision-profil',['vision'=>$vision]);
    }
    public function formationhistory()
    {
        $formationhistory = Formationhistory::firstOrFail();
        return view('landing.pages.profil.formationhistory-profil',['formationhistory'=>$formationhistory]);
    }
}
