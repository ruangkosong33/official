<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Support\Str;
use App\Models\Taskfunction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskfunctionController extends Controller
{
    public function index()
    {
        $taskfunction=Taskfunction::latest()->paginate(7);

        return view('admin.pages.taskfunction.index-taskfunction');
    }

    public function create()
    {
        return view('admin.pages.taskfunction.create-taskfunction');
    }

    public function store(Request $request)
    {
        $taskfunction=$request->validate([
            'title_taskfunction'=>'required',
        ]);

        $taskfunction=Taskfunction::create([
            'title_taskfunction'=>$request->title_taskfunction,
            'slug'=>Str::slug($request->title_taskfunction),
            'description_taskfunction'=>$request->description_taskfunction,
        ]);

        return redirect()->route('taskfunction.index');
    }

    public function edit($id)
    {
        $taskfunction=Taskfunction::findOrFail($id);

        return view('admin.pages.taskfunction.edit-taskfunction', ['taskfunction'=>$taskfunction]);
    }

    public function update(Request $request, $id)
    {
        $taskfunction=$request->validate([
            'title_taskfunction'=>'required',
        ]);

        $taskfunction=Taskfunction::findOrFail($id);

        $taskfunction->update([
            'title_taskfunction'=>$request->title_taskfunction,
            'slug'=>Str::slug($request->title_taskfunction),
            'description_taskfunction'=>$request->description_taskfunction,

        ]);

        return redirect()->route('taskfunction.index');
    }

    public function destroy($id)
    {
        $taskfunction=Taskfunction::findOrFail($id);

        $taskfunction->delete();

        return redirect()->route('taskfunction.index');
    }
}
