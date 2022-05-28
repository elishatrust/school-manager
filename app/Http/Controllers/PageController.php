<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function login()
    {
        return view('/login');
    }

    public function about()
    {
        return view('/about');
    }
}
