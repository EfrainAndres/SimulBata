<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function lumenmdos()
    {

      return view('sicepla.super-admin.super-admin-lumenm2');
    }

    public function lumenIlu()
    {

      return view('sicepla.super-admin.super-admin-lumenilu');
    }
}
