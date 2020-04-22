<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function page(Request $request)
    {
        $title = ucfirst($request->path());
        return view('pages.' . $request->path())->with('title', $title);    //  Pass variable as data
    }
}
