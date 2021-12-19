<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function test()
    {
        return "its comes from another controller";
    }
}
