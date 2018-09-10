<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'types' => Type::all()->sortBy('order'),
        ]);
    }
}
