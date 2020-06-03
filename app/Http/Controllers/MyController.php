<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class MyController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getCv()
    {
        return view('portfolio.main');
    }

    public function getIndex()
    {
        return view('index');
    }

    public function getGallery()
    {
        return view('portfolio.gallery');
    }

}    

?>