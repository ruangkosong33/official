<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;


class CategoryController extends Controller
{
    public function index(Request $request)
    {

        // if(request()->ajax())
        // {
        //     return datatables()->of(Category::select('*'))
        //     ->addColumn('action', 'categorys.action')
        //     ->rawColumns(['action'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }

        // if($request->ajax())
        // {
        //     // return Datatable()->of(Category::select('*'))
        //     $category=Category::orderBy('id', 'asc');
        //     return Datatables()->of($category)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row)
        //         {
        //             $btn = '<a href="" class="edit btn btn-warning btn-sm "><i class="fas fa-edit"></i></a>';
        //             $btn = $btn. '<a href="javascript:void(0)" class="destroy btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></a>';

        //             return $btn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        $category=Category::all();

        // $category=Category::orderBy('title_category', 'asc');

        // return DataTables::of($category)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($category)
        //             {
        //                 return view('admin.pages.category.tombol')->with('category',$category);
        //             })
        //             ->make(true);

        return view('admin.pages.category.index-category', ['category'=>$category]);
    }

    public function create()
    {
        return view('admin.pages.category.create-category');
    }

    public function store(Request $request)
    {
        $category=$request->validate([
            'title_category'=>'required',
        ]);

        $category=Category::create([
            'title_category'=>$request->title_category,
            'slug'=>Str::slug($request->title_category),
        ]);

        Alert::success('Berhasil', 'Data Berhasil DI Simpan');

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category=Category::findOrFail($id);

        return view('admin.pages.category.edit-category', ['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $category=$request->validate([
            'title_category'=>'required',
        ]);

        $category=Category::findOrFail($id);

        $category->update([
            'title_category'=>$request->title_category,
            'slug'=>Str::slug($request->title_category),
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category=Category::findOrFail($id);

        $category->delete();

        Alert::success('Berhasil' ,'Data Berhasil Di Hapus');

        return redirect()->route('category.index');
    }
}
