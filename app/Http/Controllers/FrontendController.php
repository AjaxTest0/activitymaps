<?php

namespace App\Http\Controllers;

use App\Models\frontend;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frontend = frontend::first();
        return view('welcome')->with('data',$frontend);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(frontend $frontend)
    {
        //
    }
}
