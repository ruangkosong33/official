<?php

namespace App\Http\Controllers;

use App\Models\Filepad;
use Illuminate\Http\Request;

class FilepadController extends Controller
{
    public function index()
    {
        $filepad=Filepad::all();

    }
}
