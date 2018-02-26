<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweets;
use App\TweetsN;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loca = array();
        $tweet = TweetsN::all();
        
        //porcentajes
        $loca[21] = $tweet->where('tema','ambiente')->count();
        $loca[22] = $tweet->where('tema','movilidad')->count();
        $loca[23] = $tweet->where('tema','cultura')->count();

        $total = $loca[21] + $loca[22] + $loca[23];
        
        $loca[24] = ($loca[21] * 100) / $total;
        $loca[24] = round($loca[24] * 10) / 10;

        $loca[25] = ($loca[22] * 100) / $total;
        $loca[25] = round($loca[25] * 10) / 10;

        $loca[26] = ($loca[23] * 100) / $total;
        $loca[26] = round($loca[26] * 10) / 10;

        return view('material.sample', compact('loca'));
    }

    
    
}
