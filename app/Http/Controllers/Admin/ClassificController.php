<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classific;

class ClassificController extends Controller
{
    public function index(Request $request)
    {
        $classifics = Classific::orderByDesc('points')->get();
        return view('admin.classifics.index', compact('classifics'));
    }
}

