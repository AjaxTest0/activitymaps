<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Maps;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Http\Request;
use App\Exports\MapsExport;
use Maatwebsite\Excel\Facades\Excel;



class MapsController extends Controller
{
    // public function __construct()
    // {
        // $this->middleware('auth:admin');
        // $this->middleware('role:user')->only('index');
        //  $users = Users::where('years', '>', 20):
        //  return Excel::download( new UsersExport($users), 'users.xls');
    // }

    public function export(Request $request) 
    {   
        // $map = Maps::where('from','>',$request->from)
        //             ->where('to', '<', $request->to)->get();
        return Excel::download(new MapsExport, 'maps.xlsx');
    }
    
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
        if(Auth::user()->roles->first()->name == 'user'){
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
             'admin_id' => auth()->user()->id,
        ];

        $test = Maps::firstOrCreate($data);
        if($test->wasRecentlyCreated){
            $maps = Maps::get();
            $status = 'Dublicated Successfully';
            return view('/dashboard/index')->with('maps',$maps)->with(['uploaded' => $status]);
        }else{
            $status = 'No Chnage Was Done';
            return back()->with(['uploaded' => $status]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function show(Maps $maps)
    {
        $api = \DB::table('users')->where('id', '1')->first();
        session(['key' => $api]);
        return view('dashboard.marker')->with('maps',$maps)->with('api',$api);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit(Maps $maps)
    {
        if(Auth::user()->roles->first()->name == 'user'){
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
        if(Auth::user()->roles->first()->name == 'user'){
            return redirect('/index')->with('status', 'Access Denied!');
        }
        if($request->input('action') == 'dublicate'){
           return $this->store($request);
        }

        $input = $request->except(['action']);

        $maps->update($input);
        $status = 'Map Updated';
        return redirect('/index')->with('uploaded',$status);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maps $maps)
    {
        if(Auth::user()->roles->first()->name == 'user'){
            return redirect('/index')->with('status', 'Access Denied!');

        }

        $maps->delete();
        $status = 'Map Deleted';
        return back()->with(['status' => $status]); 

    }
    // ajax call jason responses
    public function ajaxmap()
   {
       # code...
       $maps = Maps::get();
       return response()->json($maps, 200);
   }
}
