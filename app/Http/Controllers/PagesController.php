<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
 
//   public function index(){
//     $titleName = "HomePage";
//     return view('pages.index',compact('titleName'));
//   }

//   public function about(){
//     $title = "About Us";
//     return view('pages.about')->with('title', $title);
//   }

// public function index()
// {
//     $this->layout->content = View::make('pages/index', array('title' => 'Home page'));
// }

  public function index(){
    $data = array();
    $data['title'] = "Welcome";
    $data['page'] = "home";
    $data['description'] = "Some kind of description";
    return view('pages.index')->with($data);
  }
}