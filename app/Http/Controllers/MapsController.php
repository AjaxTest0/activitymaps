<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Maps;
use Illuminate\Http\Request;
use App\Exports\MapsExport;
use Bitfumes\Multiauth\Model\Admin;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\AdminMaps;



class MapsController extends Controller
{
    // public function __construct()
    // {
        // $this->middleware('auth:admin');
        // $this->middleware('role:user')->only('index');
        //  $users = Users::where('years', '>', 20):
        // $map = Maps::where('from','>',$request->from)
        //             ->where('to', '<', $request->to)->get();
        //  return Excel::download( new UsersExport($users), 'users.xls');
    // }

    public function export(Request $request) 
    {   
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
        
        $data = [
            'type' => $request->type,
            'proponent' => $request->proponent,
            'from' => $request->from,
            'to' => $request->to,
            'fromdate' => $request->from,
            'todate' => $request->to,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'color' => $request->color,
            'admin_id' => auth()->user()->id,
        ];

        $test = Maps::firstOrCreate($data);
        if($test->wasRecentlyCreated){
            $status = 'Map uploaded';
            return redirect('/index')->with('uploaded',$status);
        }else{
            $status = 'No Change was done';
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
    public function edit(Maps $map)
    {
        $users = Admin::where('id','!=',Auth::user()->id)->get();
        return view('dashboard.edit', compact('users','map'));
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
        if($request->input('action') == 'dublicate'){
            return $this->store($request);
        }
        $input = [
            'type' => $request->type,
            'proponent' => $request->proponent,
            'from' => $request->from,
            'to' => $request->to,
            'fromdate' => $request->from,
            'todate' => $request->to,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'color' => $request->color,
            'admin_id' => auth()->user()->id,
        ];

        $maps->update($input);
        foreach ($request->users as  $user){
            AdminMaps::create([
                'admin_id' => $user,
                'maps_id' => $request->id,
            ]);

        }


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
        $maps->delete();
        $status = 'Map Deleted';
        return back()->with(['status' => $status]); 

    }
    // ajax call jason responses
    public function ajaxmap()
   {
        $maps = Maps::get();
        return response()->json($maps, 200);
   }
}