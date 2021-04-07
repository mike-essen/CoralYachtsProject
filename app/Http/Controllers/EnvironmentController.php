<?php

namespace loginportal\Http\Controllers;

use http\Env;
use Illuminate\Support\Facades\View;
use loginportal\Environment;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $environments = Environment::all();

        return view::make('environments.index')->with(compact('environments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('environments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $environment = new Environment();

        $request->validate([
            'url' => 'required|url'
        ]);

        $environment->title             = $request->title;
        $environment->url               = $request->url;
        $environment->category          = $request->category;
        $environment->description       = $request->description;
        $environment->save();

        session()->flash('success', 'Environment saved successfully!');

        return redirect('/environments/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \loginportal\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function show(Environment $environment)
    {
        return view::make('environments.show')->with(compact('environment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \loginportal\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Environment $environment)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $environment->update($request->all());

        session()->flash('success', 'Environment saved successfully!');

        return redirect('/environments/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \loginportal\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Environment $environment)
    {
        $environment->delete();

        session()->flash('success', 'Environment successfully removed!');

        return redirect('/environments/');
    }
    /* testing */
    public function orderUp(Environment $environment)
    {
        $currentEnvironmentOnNewOrder           = Environment::where('order', '=', ($environment->order - 1))->first();
        $currentEnvironmentOnNewOrder->order    = $environment->order;
        $currentEnvironmentOnNewOrder->save();

        $environment->order = ($environment->order - 1);
        $environment->save();
    }

    /**
     * @param \loginportal\Environment $environment
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function orderDown(Environment $environment)
    {
        $currentEnvironmentOnNewOrder           = Environment::where('order', '=', ($environment->order + 1))->first();
        $currentEnvironmentOnNewOrder->order    = $environment->order;
        $currentEnvironmentOnNewOrder->save();

        $environment->order = ($environment->order + 1);
        $environment->save();
    }

    public function morePosts(Environment $environment){
        $data=  collect($environment->fetchPosts('order'))->slice(10);
        return response()->json($data);
    }
}
