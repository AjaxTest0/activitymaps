<?php

namespace App\Http\Controllers;

use App\Models\Maps;
use Illuminate\Http\Request;
use Bitfumes\Multiauth\Model\Admin;
use Auth;

class MapsController extends Controller
{
    // public function __construct()
    // {
        // $this->middleware('auth:admin');
        // $this->middleware('role:user')->only('index');
    // }

    
    public function index()
    {
        $maps = Maps::get();
        return view('/dashboard/index')->with('maps',$maps);
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
        if(Auth::user()->roles->first()->name != 'user'){
            return redirect('/index')->with('status', 'Access Denied!');

        }
        
        $data = [
             'type' => $request->type,
             'proponent' => $request->proponent,
             'from' => $request->from,
             'to' => $request->to,
             'description' => $request->description,
             'latitude' => $request->latitude,
             'longitude' => $request->longitude,
             'color' => $request->color,
             'user_id' => auth()->user()->id,
        ];

        Maps::create($data);


        $status = 'Map uploaded';
        return back()->with(['status' => $status]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function show(Maps $maps)
    {
        // dd($maps);
       return view('dashboard.marker')->with('maps',$maps);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit(Maps $maps)
    {
        if(Auth::user()->roles->first()->name != 'user'){
            return redirect('/index')->with('status', 'Access Denied!');

        }
        
        return view('dashboard.edit')->with('map',$maps);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maps $maps)
    {
        if(Auth::user()->roles->first()->name != 'user'){
            return redirect('/index')->with('status', 'Access Denied!');

        }

        $input = $request->all();
        // dd($input);
        $maps->update($input);
        return redirect('/index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maps $maps)
    {
        if(Auth::user()->roles->first()->name != 'user'){
            return redirect('/index')->with('status', 'Access Denied!');

        }

        $maps->delete();
        $status = 'Map Deleted';
        return back()->with(['status' => $status]); 

    }
}
