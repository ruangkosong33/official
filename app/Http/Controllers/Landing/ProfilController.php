<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vision;
use App\Models\Formationhistory;
use App\Models\Issue;
use App\Models\Goalobjective;
use App\Models\Taskfunction;
use App\Models\Policydirection;
use App\Models\Serviceorder;

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
    public function issue()
    {
        $issue = Issue::firstOrFail();
        return view('landing.pages.profil.issue-profil',['issue'=>$issue]);
    }
    public function goalobjective()
    {
        $goalobjective = Goalobjective::firstOrFail();
        return view('landing.pages.profil.goalobjective-profil',['goalobjective'=>$goalobjective]);
    }

    public function taskfunction()
    {
        $taskfunction = Taskfunction::firstOrFail();
        return view('landing.pages.profil.taskfunction-profil',['taskfunction'=>$taskfunction]);
    }
    public function policydirection()
    {
        $policydirection = Policydirection::firstOrFail();
        return view('landing.pages.profil.policydirection-profil',['policydirection'=>$policydirection]);
    }
    public function serviceorder()
    {
        $serviceorder = Serviceorder::firstOrFail();
        return view('landing.pages.profil.serviceorder-profil',['serviceorder'=>$serviceorder]);
    }

}
