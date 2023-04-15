<?php

namespace App\Http\Controllers\Profil;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $event=Event::all();

        return view('admin.pages.event.index-event', ['event'=>$event]);
    }

    public function create()
    {
        return view('admin.pages.event.create-event');
    }

    public function store(Request $request)
    {
        $event=$request->validate([
            'title_event'=>'required',
            'description_event'=>'required',
            'place'=>'required',
            'date_event'=>'required',
        ]);

        $event=Event::create([
            'title_event'=>$request->title_event,
            'slug'=>Str::slug($request->title_event),
            'description_event'=>$request->description_event,
            'place'=>$request->place,
            'date_event'=>$request,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('event.index');
    }

    public function edit($id)
    {
        $event=Event::findOrFail($id);

        return view('admin.pages.event.edit-event', ['event'=>$event]);
    }

    public function update(Request $request, $id)
    {
        $event=$request->validate([
            'title_event'=>'required',
            'description_event'=>'required',
            'place'=>'required',
            'date_event'=>'required',
        ]);

        $event=Event::findOrFail($id);

        $event->update([
            'title_event'=>$request->title_event,
            'slug'=>Str::slug($request->title_event),
            'description_event'=>$request->description_event,
            'place'=>$request->place,
            'date_event'=>$request,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('event.index');
    }

    public function destroy($id)
    {
        $event=Event::findOrFailI($id);

        $event->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
