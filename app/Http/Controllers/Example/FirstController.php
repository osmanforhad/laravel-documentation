<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //__index method__//
    public function index()
    {
        return view('contact');
    }
}
