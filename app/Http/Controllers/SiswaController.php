<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create()
    {
        

        return view('data.siswa.create');
    }
    
}
