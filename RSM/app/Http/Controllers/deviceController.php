<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Device;
// Use SQL qurry by bringing DB Librely
use  DB;

class deviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // // // Use SQL qurry
        // // $devices = DB::select('SELECT * FROM devices');
        // // Order by 
        // $devices = DB::select('SELECT * FROM devices ORDER BY title DESC');


        // // // // // Use Eloquent
        // // // // $devices = Device::all();
        // // // // Order by 
        // // // $devices = Device::orderBy('title', 'desc')->get();
        // // // specified
        // // return Device::where('title', 'Device Two')->get();
        // // Just take 1 
        // $devices = Device::orderBy('title', 'desc')->take(1)->get();
        // paginate (number the page)
        $devices = Device::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('devices.index')->with('devices',$devices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation of input data
        $this->validate($request,[
            'title' =>'required',
            'body' =>'required'
        ]);

        // Create Device
        $Device = new Device;
        $Device->title = $request->input('title');
        $Device->body = $request->input('body');
        $Device->save();

        // redirect with success message
        return redirect('/devices')->with('success', 'Device Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //fatche it with database "Eloquent"
        // return Device::find($id);

        // return the view
        $Device = Device::find($id);
        return view ('devices.show')->with('Device', $Device);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // return the view
       $Device = Device::find($id);
       return view ('devices.edit')->with('Device', $Device);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Update Device
        $Device = Device::find($id);
        $Device->type = $request->input('type');
        $Device->brand = $request->input('brand');
        $Device->model = $request->input('model');
        $Device->sn = $request->input('sn');
        $Device->uid = $request->input('uid');
        $Device->date = $request->input('date');
        $Device->note = $request->input('note');
        $Device->save();

        // redirect with success message
        return redirect('/devices')->with('success', 'Device Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Update delete
        $Device = Device::find($id);
        $Device->delete();

        // redirect with success message
        return redirect('/devices')->with('success', 'Device Updated');
    }
}
