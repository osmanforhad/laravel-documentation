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

    //__Student store__//
public function Teacherstore(Request $request)
{
    dd($request->all());
} 

//__About sotre__//
public function Aboutstore(Request $request)
{
    // dd($request->all());
    // dd($request->email);
    // dd($request->path());
    // dd($request->url());
    // dd($request->ip());
    dd($request->collect());
    //  dd($request->input('email'));
} 

}
