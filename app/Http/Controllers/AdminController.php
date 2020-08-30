<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	 if (!session('ses_id')) {
         return Redirect()->route('login');
      }
       return view('admin.index');
       
    }
}
