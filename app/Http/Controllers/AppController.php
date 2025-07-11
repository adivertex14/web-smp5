<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }
}
