<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        // Menampilkan file 
        return view('pengaduan.pengaduan');
        
    }
    
}
