<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): View
    {
        return view('levelAdmin.home');
    }

    public function pegawaiHome(): View
    {
        return view('levelPegawai.pegawaiHome');
    }
  
    public function customerHome(): View
    {
        return view('levelCustomer.customerHome');
    }
}
