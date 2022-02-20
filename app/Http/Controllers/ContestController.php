<?php

namespace App\Http\Controllers;

use App\Models\Contest;
use Illuminate\Http\Request;
use App\Events\RegisterEventMail;

class ContestController extends Controller
{
    //

    public function store()
    {
        $data = request()->validate([
            'email' => 'required|email'
        ], request()->all());

       $constest_created = Contest::create($data);

       $contest_created_email = $constest_created->email;

       event(new RegisterEventMail($contest_created_email));  //or RegisterEventMail::dispatch($contest_created_email);

       return back();

    }
}
