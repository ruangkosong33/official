<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use DataTables;

class TestController extends Controller
{
    public function index()
    {
        $test=Test::all();

        if(request()->ajax())
        {
            return datatables()->of($test)
            ->addIndexColumn()
            ->addColumn('action', function($test)
            {
               $btn ='<button class="edit btn btn-warning" id="'.$test->id.'" name="edit">Edit</button>';
               $btn .='<button class="hapus btn btn-danger ml-1" id="' .$test->id.'" name="hapus">Hapus</button>';

               return $btn;

            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.pages.test', ['test'=>$test]);
    }

    public function store(Request $request)
    {

        dd($request->all());
            
    }

}
