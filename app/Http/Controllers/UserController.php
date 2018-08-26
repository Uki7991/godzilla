<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back();
    }
}
