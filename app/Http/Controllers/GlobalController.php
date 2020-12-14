<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function staff()
    {
        return view('staff/global');
    }

    public function tentang()
    {
        return view('staff/miraima');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function gallery()
    {
        return view('gallery');
    }
}
