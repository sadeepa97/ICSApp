<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');

    }


    public function CStocks(){

        return view('pages.CStocks');
    }

    public function Stocks(){

        return view('pages.Stocks');
    }
}
