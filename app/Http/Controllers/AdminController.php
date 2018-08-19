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
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="#delete-'.$user->id.'" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
            })
            ->removeColumn('password')
            ->make(true);
    }
}
