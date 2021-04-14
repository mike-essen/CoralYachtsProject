<?php

namespace loginportal\Http\Controllers;


use Illuminate\Support\Facades\View;
use loginportal\Banner;


class ListingController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners        = Banner::all();

        return view::make('yacht-listing')->with(compact('banners'));
    }
}
