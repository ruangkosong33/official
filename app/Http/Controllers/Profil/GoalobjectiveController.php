<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Models\Goalobjective;
use Illuminate\Http\Controller\Controllers;

class GoalobjectiveController extends Controller
{
    public function index()
    {
        $goalobjective=Goalobjective::all();

        return view('admin.pages.goalobjective.index-goalobjective', ['goalobjective'=>$goalobjective]);
    }

    public function create()
    {
        return view('admin.pages.goalobjective.create-goalobjective');
    }

    public function store(Request $request)
    {
        $goalobjective=$request->validate([
            'title_goalobjective'=>'required',
            'desciption_goalobjective'=>'required',
        ]);

        $goalobjective=Goalobjective::create([
            'title_goalobjective'=>$request->title_goalobjective,
            'slug'=>str::slug($request->title_goalobjective),
            'description_goalobjective'=>$request->descobjective,

        ]);

        return redirect()->route('goalobjective.index');

    }
}
