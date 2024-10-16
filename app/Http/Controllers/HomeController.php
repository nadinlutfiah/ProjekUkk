<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    //   $data= array(
    //     'title '= 'homepage'
    //   );
        return view('home.index'); 

    }
}
