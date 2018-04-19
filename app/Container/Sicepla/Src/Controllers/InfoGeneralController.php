<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class InfoGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('sicepla.super-admin.super-admin-info');
    }

    public function slide()
    {
      return view('sicepla.super-admin.super-admin-slide');
    }

    public function images()
    {
      return view('sicepla.super-admin.super-admin-images');
    }

    public function simulacion()
    {
      return view('sicepla.super-admin.super-admin-simulacion');
    }

}
