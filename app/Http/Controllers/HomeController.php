<?php

namespace App\Http\Controllers;

use App\Models\Hotel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = Hotel::all();
        return view('home',compact('hoteles'));
    }

    public function show($search){
        $hoteles = Hotel::all();
        $filtro = [];
        foreach ($hoteles as $key=>$value){

            if(strpos(strtolower($value->nombre),$search)!==false){

              $filtro = array_add($filtro,$key,$value);
            }
        }
        $hoteles = $filtro;
        return view('home',compact('hoteles'));
    }
}
