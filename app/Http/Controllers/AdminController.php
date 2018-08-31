<?php

namespace App\Http\Controllers;

use App\Option;
use App\Product;
use App\Type;
use App\User;
use DataTables;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function options()
    {
        return view('admin.options', [
            'option' => Option::find(1),
        ]);
    }

    public function getUsers(Request $request)
    {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->removeColumn('password')
            ->make(true);
    }

    public function getProducts(Request $request)
    {
        $products = Product::with('type')->select('*');

        return Datatables::eloquent($products)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('product.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('product.destroy', $model->id).'" data-id="'.$model->id.'"onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }

    public function getTypes(Request $request)
    {
        $types = Type::select();

        return Datatables::of($types)
            ->addColumn('action', function ($model) {
                return '<a href="'.route('type.edit', $model->id).'" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="'.route('type.destroy', $model->id).'" data-id="'.$model->id.'"onclick="event.preventDefault();" data-toggle="modal" data-target="#delete-confirmation" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a>';
            })
            ->make(true);
    }
}
