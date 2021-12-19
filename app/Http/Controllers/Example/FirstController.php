<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\SecondController;

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
    $data = array();
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['phone'] = $request->phone;
    // dd($data);
    // return redirect()->route('contact.us');
    //  return redirect('/');
    // return redirect()->action([SecondController::class, 'test']);
    // return redirect()->away('https://code2creation.com/');
     return redirect()->back()->with('status', 'your input is submitted');

    // dd($request->email);
    // dd($request->path());
    // dd($request->url());
    // dd($request->ip());
    // dd($request->collect());
    //  dd($request->input('email'));
} 

}
