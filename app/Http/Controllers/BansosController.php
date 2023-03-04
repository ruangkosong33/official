<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    public function index()
    {
        $bansos=Bansos::all();

        return view('admin.pages.bansos.index-bansos');
    }

    public function create()
    {
        return view('admin.pages.bansos.create-bansos');
    }

    public function store(Request $request)
    {
        
    }
}
