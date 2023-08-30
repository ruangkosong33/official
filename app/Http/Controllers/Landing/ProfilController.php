<?php

namespace App\Http\Controllers\Landing;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Issue;
use App\Models\Leader;
use App\Models\Vision;
use App\Models\Structure;
use Illuminate\Support\Arr;
use App\Models\Serviceorder;
use App\Models\Taskfunction;
use Illuminate\Http\Request;
use App\Models\Goalobjective;
use App\Models\Policydirection;
use App\Models\Formationhistory;
use App\Http\Controllers\Controller;

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
    public function structure()
    {
        $structure = Structure::firstOrFail();
        return view('landing.pages.profil.structure-profil',['structure'=>$structure]);
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
    public function leaders()
    {
        $leaders = Leader::orderBy('periode','DESC')->get();
        return view('landing.pages.profil.leader-profil',['leaders'=>$leaders]);
    }

    public function event()
    {
        $today = Carbon::today();
        $upcommingEvents = Event::whereDate('date_event','>',$today)->get();
        $todayEvents = Event::whereDate('date_event','=',$today)->get();
        $pastEvents = Event::where('date_event','<',$today)->get();
        $events = Arr::collapse([
            $todayEvents,
            $upcommingEvents,
            $pastEvents,
        ]);
        return view('landing.pages.profil.event-profil',['events'=>$events,'today'=>$today]);
    }

}
