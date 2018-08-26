<?php

namespace App\Http\Controllers;

use App\Http\Requests\OptionRequest;
use App\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(OptionRequest $request, Option $option)
    {
        $validated = $request->validated();

        $option->fill($validated);

        if ($request->hasFile('logo')) {
            if (is_file(public_path('uploads/'.$option->getOriginal('logo'))) && $option->getOriginal('logo')) {
                unlink(public_path('uploads/'.$option->getOriginal('logo')));
            }

            $file = $request->file('logo');
            $fileName = uniqid('logo_').'.jpg';

            \Image::make($file)
                ->save(public_path('uploads/'.$fileName));

            $option->logo = $fileName;
        }

        if ($request->hasFile('banner_image')) {
            if (is_file(public_path('uploads/'.$option->getOriginal('banner_image'))) && $option->getOriginal('banner_image')) {
                unlink(public_path('uploads/'.$option->getOriginal('banner_image')));
            }

            $file = $request->file('banner_image');
            $fileName = uniqid('banner_image_').'.jpg';

            \Image::make($file)
                ->save(public_path('uploads/'.$fileName), 50);

            $option->banner_image = $fileName;
        }

        $option->save();

        return redirect()->back();
    }
}
