<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    public function index()
    {
        return view('admin.projects.index');
    }
}
