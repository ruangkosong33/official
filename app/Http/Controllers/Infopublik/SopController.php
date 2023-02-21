<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SopController extends Controller
{
    public function index()
    {
        $sop=Sop::latest()->paginate(7);

        return view('admin.pages.');
    }
}
