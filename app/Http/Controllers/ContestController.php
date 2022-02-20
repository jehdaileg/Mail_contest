<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContestController extends Controller
{
    //

    public function store()
    {
       $data = request()->validate([
            'email' => 'required|email'
       ], request()->all());


    }
}
