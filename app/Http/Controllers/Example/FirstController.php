<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Example\SecondController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class FirstController extends Controller
{
    public function __construct()
    {
        
    }

    //__index method__//
    public function index()
    {
        if(view()->exists('frontend.contact'))
        {
            //return View::make('frontend.contact');
        return view('frontend.contact', ['name' => 'osman forhad']);
        }
        else{
            echo "This page is not available";
        }
        
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
    $validated = $request->validate([
        'name' => 'required|max:55',
        'email' => 'required|email|max:80',
        'password' => 'required|min:6|max:12',
    ]);

    //__Store Login Record__//
    \Log::channel('aboutstore')->info('the about form submited by: '.rand(1,20));
    return redirect()->back();
    // dd($request->all());
    // $data = array();
    // $data['name'] = $request->name;
    // $data['email'] = $request->email;
    // $data['phone'] = $request->phone;
    // dd($data);
    // return redirect()->route('contact.us');
    //  return redirect('/');
    // return redirect()->action([SecondController::class, 'test']);
    // return redirect()->away('https://code2creation.com/');
    //  return redirect()->back()->with('status', 'your input is submitted');

    // dd($request->email);
    // dd($request->path());
    // dd($request->url());
    // dd($request->ip());
    // dd($request->collect());
    //  dd($request->input('email'));
} 

}
