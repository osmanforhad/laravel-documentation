<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function __construct()
    {
        
    }

    //__index method__//
    public function index()
    {
        return view('contact');
    }

    //__dist method__//
    public  function dist()
    {
        return view('zila');
    }
}
