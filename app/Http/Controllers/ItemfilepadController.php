<?php

namespace App\Http\Controllers;

use App\Models\Pad;
use App\Models\Filepad;
use App\Models\Itemfilepad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ItemfilepadController extends Controller
{
    public function index(Pad $pad)
    {
        $itemfilepad=Itemfilepad::where('pad_id',$pad->id)->get();

        return view('admin.pages.itemfilepad.index-itemfilepad', ['itemfilepad'=>$itemfilepad, 'pad'=>$pad]);
    }

    public function create(Pad $pad)
    {
        return view('admin.pages.itemfilepad.create-itemfilepad', ['pad'=>$pad]);
    }

    public function store(Request $request, Pad $pad)
    {
        $itemfilepad=$request->validate([
            'title_itemfilepad'=>'required',
            'file_itemfilepad'=>'required|mimes:pdf',
        ]);

        if($request->file('file_itemfilepad'))
        {
            $file=$request->file('file_itemfilepad');
            $extension=$file->getClientOriginalName();
            $filename=$extension;
            $file->move('uploads/File-PAD/', $filename);
        }

        $itemfilepad=Itemfilepad::create([
            'title_itemfilepad'=>$request->title_itemfilepad,
            'file_itemfilepad'=>$filename,
            'pad_id'=>$pad->id,
        ]);

        return redirect()->route('itemfilepad.index', ['pad'=>$pad]);
    }

    public function edit(Pad $pad, Itemfilepad $itemfilepad)
    {
        return view('admin.pages.itemfilepad.edit-itemfilepad', ['pad'=>$pad, 'itemfilepad'=>$itemfilepad]);
    }

    public function update(Request $request,itemfilepad $itemfilepad)
    {

        $this->validate($request,[
            'title_itemfilepad'=>'required',
            'file_itemfilepad'=>'required|mimes:pdf',
        ]);

        if($request->file('file_itemfilepad'))
        {
            $file=$request->file('file_itemfilepad');
            $extension=$file->getClientOriginalName();
            $filename=$extension;
            $file->move('uploads/File-PAD/', $filename);
        }

        $itemfilepad=Itemfilepad::where('id',$itemfilepad->id);

        $itemfilepad->update([
            'title_itemfilepad'=>$request->title_itemfilepad,
            'file_itemfilepad'=>$filename,
        ]);

        return redirect('admin/pages/index-itemfilepad');

    }

    public function destroy(Itemfilepad $itemfilepad)
    {
        $itemfilepad=Itemfilepad::where('id', $itemfilepad->id);

        $itemfilepad->delete();

        return back();
    }
}
