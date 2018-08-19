<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use DataTables;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index', [
            'typeOfView' => isset($request->page) ? $request->page : 'options',
            'users' => User::all(),
        ]);
    }

    public function getUsers()
    {
        return Datatables::of(User::query())->make(true);
    }
}
