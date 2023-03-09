<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Support\Str;
use App\Models\Serviceorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceorderController extends Controller
{
    public function index()
    {
        $serviceorder=Serviceorder::latest()->paginate(6);

        return view('admin.pages.serviceorder.index-serviceorder', ['serviceorder'=>$serviceorder]);
    }

    public function create()
    {
        return view('admin.pages.serviceorder.create-serviceorder');
    }

    public function store(Request $request)
    {
        $serviceorder=$request->validate([
            'title_serviceorder'=>'required',
            'description_serviceorder'=>'required',
        ]);

        $serviceorder=Serviceorder::create([
            'title_serviceorder'=>$request->title_serviceorder,
            'slug'=>Str::slug($request->title_serviceorder),
            'description_serviceorder'=>$request->description_serviceorder,
        ]);

        return redirect()->route('serviceorder.index');
    }

    public function edit($id)
    {
        $serviceorder=Serviceorder::findOrFail($id);

        return view('admin.pages.serviceorder.edit-serviceorder', ['serviceorder'=>$serviceorder]);
    }

    public function update(Request $request, $id)
    {
        $serviceorder=$request->validate([
            'title_serviceorder'=>'required',
            'description_serviceorder'=>'required',
        ]);

        $serviceorder=Serviceorder::findOrFail($id);

        $serviceorder->update([
            'title_serviceorder'=>$request->title_serviceorder,
            'slug'=>Str::slug($request->title_serviceorder),
            'description_serviceorder'=>$request->description_serviceorder,
        ]);

        return redirect()->route('serviceorder.index');
    }

    public function destroy($id)
    {
        $serviceorder=findOrFail($id);

        $serviceorder->delete();

        return redirect()->route('serviceorder.index');
    }
}
