<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
   public function index(){
    $name = 'ajith';
   return view('welcome',compact('name'));
   }
}
