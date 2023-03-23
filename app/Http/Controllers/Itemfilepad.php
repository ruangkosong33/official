<?php

namespace App\Http\Controllers;

use App\Models\Pad;
use Illuminate\Http\Request;

class Itemfilepad extends Controller
{
    public function index(Pad $pad)
    {
        $itemfilepad=Pad::where('pad_id', $pad->id)-get();

        return view('admin.pages.itemfilepad.index-itemfilepad', ['itemfilepad'=>$itemfilepad]);
    }

    public function create(Pad $pad)
    {
        return view('admin.pages.item-filepad.create-item-filepad', ['pad'=>$pad]);
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
}
