<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function designers()
    {
        return view('designers');
    }

    public function packages()
    {
        return view('packages');
    }

    public function services()
    {
        return view('services');
    }

    public function showcase()
    {
        return view('showcase');
    }

   
}
