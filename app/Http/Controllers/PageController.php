<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function contact()
    {

        return view('ar.contact');
    }
    public function apropos()
    {

        return view('ar.apropos');
    }
    public function galleries()
    {

        return view('ar.galleries');
    }
    public function acceuil()
    {

        return view('ar.accueil');
    }
}
