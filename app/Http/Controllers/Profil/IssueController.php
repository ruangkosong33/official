<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use Illuminate\Http\Controller\Controllers;

class IssueController extends Controller
{
    public function index()
    {
        $issue=Issue::all();

        return view('admin.pages.issue.index-issue', ['issue'=>$issue]);
    }

    public function create()
    {
        return view('admin.pages.issue.create-issue');
    }

    public function store(Request $request)
    {
        $issue=$request->validate([
            'title_issue'=>'required',
            'description_issue'=>'required',
        ]);

        $issue=Issue::create([
            'title_issue'=>$request->title_issue,
            'slug'=>Str::slug($request->title_issue),
            'description_issue'=>$request->description_issue,
        ]);

        return redirect()->route('issue.index');
    }

    public function edit($id)
    {
        $issue=Issue::findOrFail($id);

        return view('admin.pages.issue.edit-issue');
    }

    public function update(Request $request, $id)
    {
        $issue=$request->validate([
            'title_issue'=>'required',
            'description_issue'=>'required',
        ]);

        $issue=Issue::findOrFail($id);

        $issue=Issue::create([
            'title_issue'=>$request->title_issue,
            'slug'=>Str::slug($request->title_issue),
            'description_issue'=>$request->description_issue,
        ]);

        return redirect()->route('issue.index');
    }

    public function destroy($id)
    {
        $issue=Issue::findOrFail($id);

        $issue->delete();

        return redirect()->route('issue.index');
    }
}
