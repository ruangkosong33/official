<?php

namespace App\Http\Controllers;

use App\Models\Pad;
use App\Models\Filepad;
use App\Models\Itemfilepad;
use Illuminate\Http\Request;

class ItemfilepadController extends Controller
{
    public function index(Pad $pad)
    {
        $itemfilepad=Itemfilepad::where('pad_id', $pad->id)->get();

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
        ]);

        $itemfilepad=Itemfilepad::create([
            'title_itemfilepad'=>$request->title_itemfilepad,
            'pad_id'=>$pad->id,
        ]);

        return redirect()->route('itemfilepad.index', ['pad'=>$pad]);
    }

    public function edit(Itemfilepad $itemfilepad)
    {
        return view('admin.pages.itemfilepad.edit-itemfilepad', ['itemfilepad'=>$itemfilepad]);
    }
}
