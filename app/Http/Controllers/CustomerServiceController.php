<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
     public function index()
    {
        // Menampilkan file 
        return view('customer.customer');
    }
}
