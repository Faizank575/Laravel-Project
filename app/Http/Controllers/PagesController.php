<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Index page';
        return view('pages.index',compact('title'));

    }
    public function about(){
        return view('pages.about')->with('title','About Us');
    }
    public function services(){

        $data=array(
            'title'=>'services',
            'services'=>['web design','andriod development','React Native']
        );
        return view('pages.services')->with($data);
    }
}
