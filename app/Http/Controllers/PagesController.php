<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function odds(){
        return view('pages.odds');
    }

    public function search(){
        return view('pages.search');
    }
}
