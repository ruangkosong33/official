<?php

namespace App\Http\Controllers;

use App\Models\Pad;
use App\Models\Filepad;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FilepadController extends Controller
{
    public function index(Pad $pad)
    {
        $filepad=Filepad::where('pad_id', $pad->id)->latest()->get();

        return view('admin.pages.file-pad.index-file-pad', ['filepad'=>$filepad, 'pad'=>$pad]);
    }

    public function create(Pad $pad)
    {
        return view('admin.pages.file-pad.create-file-pad', ['pad'=>$pad]);
    }

    // public function store(Request $request, Pad $pad)
    // {
    //     $filepad=$request->validate([
    //         'title_filepad'=>'required',
    //         'file_pad'=>'max:3000|mimes:pdf,doc,docx',

    //     ]);

    //     if($request->file('file_pad'))
    //     {
    //         $file = $request->file('file_pad');
    //         $extention = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extention;
    //         $file->move('uploads/file-pad/', $filename);
    //     }


    //     $filepad=Filepad::create([
    //         'title_filepad'=>$request->title_filepad,
    //         'slug'=>Str::slug($request->title_filepad),
    //         'file_pad'=>$filename,
    //         'pad_id'=>$pad->id,
    //     ]);

    //     return redirect()->route('filepad.index'.['pad'=>$pad]);
    // }


}
