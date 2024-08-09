<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halloController extends Controller
{
    public function hello()
    {
        return ('Hello World');
    }

    public function greeting()
    {
        return view('blog.hellow')
        ->with('name', 'izmi')
        ->with('pekerjaan', 'dosen');
    }
}
?>