<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   	public function admin(){
   		return view('admin.index-admin-theme');
   	}

   	public function test(){
   		return view('themes.pages.test-theme');
   	}
}
