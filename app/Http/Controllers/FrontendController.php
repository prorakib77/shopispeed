<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
   public function contact_post(Request $request){

    // dd($request);
    // return $request->except('_token');
    Mail::to('rakib.dev.pro@gmail.com')->send(new ContactMail(), compact('request'));
   }
}
