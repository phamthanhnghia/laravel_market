<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   	public function createProducts(){
   		return view('theme.create.products');
   	}
   	public function createTypeProducts(){
   		return view('theme.create.type-products');
   	}
    public function createCustomer(){
      return view('theme.create.customer');
    }

}
