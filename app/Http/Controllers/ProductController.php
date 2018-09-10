<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create', [
            'types' => Type::all()->sortBy('order'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request = $request->validated();

        $product = new Product($request);

        if ($request['image']) {
            $file = $request['image'];
            $fileName = uniqid('product_').'.jpg';

            \Image::make($file)
                ->save(public_path('uploads/'.$fileName), 60);

            $product->image = $fileName;
        }

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', [
            'product' => $product,
            'types' => Type::all()->sortBy('order'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        $product->fill($validated);

        if ($request->hasFile('image')) {
            if ($product->getOriginal('image') && is_file(public_path('uploads/'.$product->getOriginal('image')))) {
                unlink(public_path('uploads/'.$product->getOriginal('image')));
            }

            $file = $request->file('image');
            $fileName = uniqid('product_').'.jpg';

            \Image::make($file)
                ->save(public_path('uploads/'.$fileName), 60);

            $product->image = $fileName;
        }

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (is_file(public_path('uploads/'.$product->image)) && $product->image) {
            unlink(public_path('uploads/'.$product->image));
        }

        $product->delete();

        return redirect()->back();
    }
}
