<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
class PantauController extends Controller
{
     public function index()
    {
         $pengaduans = Pengaduan::where('user_id', Auth::id())->latest()->get();
    
         return view('pantau.pantau', compact('pengaduans'));
    }
}
