<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexAdmin()
    {
      return view('admin/index');
    }

    public function indexDiskon()
    {
      return view('admin/diskon/index');
    }

    public function createDiskon()
    {
      return view('admin/diskon/create');
    }

    public function indexPemesan()
    {
      return view('admin/pemesan/index');
    }

    public function indexPemesanan()
    {
      return view('admin/pemesanan/index');
    }

    public function createPemesanan()
    {
      return view('admin/pemesanan/create');
    }
}
