<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex()
    {
        return view('pages.index');   //  Pass variable as data
    }
}
