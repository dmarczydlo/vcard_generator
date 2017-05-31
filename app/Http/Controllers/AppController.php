<?php

namespace App\Http\Controllers;

use App\Person;
use Laravel\Lumen\Routing\Controller as BaseController;

class AppController extends BaseController
{
    public function index()
    {
        $personData = Person::all()->firstOrFail();

       dd($personData);
        return view('index');
    }
}
