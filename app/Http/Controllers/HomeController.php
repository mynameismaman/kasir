<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  //
  public function index()
  {
    $data = array('title' => 'HOME Page' );

    //return view('index',$data);
    return view('home',$data);
  }
}
