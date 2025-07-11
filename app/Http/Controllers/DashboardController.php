<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function guru()
    {
        return view('guru.dashboard');
    }

    public function siswa()
    {
        return view('siswa.dashboard');
    }
}
