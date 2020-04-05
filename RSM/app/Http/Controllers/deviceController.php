<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Device;
use App\Brand;
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
        $devices = device::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('device.index')->with('devices',$devices);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = brand::orderBy('brand', 'desc')->paginate(10);
    
        // Load the view
        return view ('device.create')->with('brands',$brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create Device
        $Device = new Device;
        $Device->type = $request->input('type');
        $Device->brand = $request->input('brand');
        $Device->model = $request->input('model');
        $Device->serial_number = $request->input('serial_number');

        if($device_photosA = $request->file('device_photosA')){
            $fileNamesToStoreA=array();
            foreach($device_photosA as $device_photo){
                // Get filename with the extension
            $fileNameToExt = $device_photo->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameToExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $device_photo->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload imagen
            $path = $device_photos->storeAs('public/device_photos', $fileNameToStore);

            $fileNamesToStoreA[]=$fileNameToStore;
            }
            $Device->device_photos = implode(', ', $fileNamesToStoreA);
          }else{
            $Device->device_photos = 'noimage.jpg';
          }

        $Device->user_id = $request->input('user_id');
        $Device->note = $request->input('note');
        $Device->save();

        // redirect with success message
        return redirect('/device')->with('success', 'Device Created');
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
        $device = Device::find($id);
        return view ('device.show')->with('device', $device);
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
       $device = Device::find($id);
       return view ('device.edit')->with('device', $device);
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
        $Device->serial_number = $request->input('serial_number');

        if($request->hasFile('device_photosA')){
            if($Device->device_photos !== 'noimage.jpg'){
                $device_photosA = explode(', ',$Device->device_photos);
                foreach($device_photosA as $device_photos)
                Storage::delete('public/photos/'.device_photos);
            }
            
            if($device_photosA = $request->file('device_photosA')){
                $fileNamesToStoreA = array();
                foreach($device_photosA as $device_photo){
                    // Get filename with the extension
                $fileNameToExt = $device_photo->getClientOriginalName();

                // Get just file name
                $fileName = pathinfo($fileNameToExt, PATHINFO_FILENAME);

                // Get just ext
                $extension = $device_photo->getClientOriginalExtension();

                // Filename to store
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;

                //Upload imagen
                $path = $device_photo->storeAs('public/device_photos', $fileNameToStore);

                $fileNamesToStoreA[]=$fileNameToStore;
                }

                $Device->device_photos = implode(', ', $fileNamesToStoreA);
            }
        }

        $Device->user_id = $request->input('user_id');
        $Device->note = $request->input('note');
        $Device->save();

        // redirect with success message
        return redirect('/device')->with('success', 'Device Updated');
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

        if($Device->device_photos !== 'noimage.jpg'){
            $device_photosA = explode(', ',$Device->device_photos);
            foreach($device_photosA as $device_photos)
            Storage::delete('public/device_photos/'.device_photos);
        }

        // redirect with success message
        return redirect('/device')->with('success', 'Device Deleted');
    }
}
