<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cateraar;

class CateraarController extends Controller
{
    public function index()
    {
        $cateraars = Cateraar::all();
        return view('home', compact(['cateraars']));
    }

    public function show($id)
    {
        $cateraar = Cateraar::findOrFail($id);
        return view('cateraar', compact(['cateraar']));
    }
}
