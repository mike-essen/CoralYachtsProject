<?php

namespace loginportal\Http\Controllers;

use http\Env;
use File;
use Illuminate\Support\Facades\View;
use loginportal\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $banners = Banner::all();

        return view::make('banners.index')->with(compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url'   => 'nullable|url',
        ]);

        $banner->title        = $request->title;
        $banner->url          = $request->url;
        $banner->width        = $request->width;
        $banner->price        = $request->price;
        $banner->description  = $request->description;

        if ($request->hasFile('image_nl')) {

            $image_nl = $request->file('image_nl');
            $extension = $image_nl->getClientOriginalExtension();
            Storage::disk('public')->put(
                $image_nl->getFilename() . '.' . $extension,
                File::get($image_nl)
            );
            $banner->image_nl = $image_nl->getFilename() . '.' . $extension;
            $banner->save();
        }

        $banner->save();

        session()->flash('success', 'Banner saved successfully!');

        return redirect('/banners/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \loginportal\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view::make('banners.show')->with(compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \loginportal\Environment  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url'   => 'nullable|url',
        ]);

        $banner->update($request->all());

        if ($request->hasFile('image_nl')) {

            $image_nl = $request->file('image_nl');
            $extension = $image_nl->getClientOriginalExtension();
            Storage::disk('public')->put(
                $image_nl->getFilename() . '.' . $extension,
                File::get($image_nl)
            );
            $banner->image_nl = $image_nl->getFilename() . '.' . $extension;
            $banner->save();
        }

        $banner->save();


        session()->flash('success', 'Banner saved successfully!');

        return redirect('/banners/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \loginportal\Environment $banner
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        session()->flash('success', 'Banner successfully removed!');

        return redirect('/banners/');
    }
}
