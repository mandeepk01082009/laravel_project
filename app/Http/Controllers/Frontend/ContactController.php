<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index()
   {
      return view('frontend.contact');
    
   }

   public function upload(Request $request)
   {
      echo $request->file('image')->store('uploads');

   }

}
