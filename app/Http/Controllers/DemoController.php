<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   public function index()
   {
    return view('layout.home');
   }
   public function about()
   {
    return view('layout.about');
   }
}
