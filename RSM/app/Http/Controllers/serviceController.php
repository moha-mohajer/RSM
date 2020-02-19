<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Service;
// Use SQL qurry by bringing DB Librely
use  DB;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('service.index')->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create Service
        $Service = new Service;
        $Service->user_id = $request->input('user_id');
        $Service->ticket_id = $request->input('ticket_id');
        $Service->first_recognition = $request->input('first_recognition');
        $Service->final_solution = $request->input('final_solution');
        $Service->order_id = $request->input('order_id');
        $Service->start_at = $request->input('start_at');
        $Service->expecting_finish_at = $request->input('expecting_finish_at');
        $Service->finish_at = $request->input('finish_at');
        $Service->fee = $request->input('fee');
        $Service->note = $request->input('note');
        $Service->save();

        // redirect with success message
        return redirect('/service')->with('success', 'Service Created');

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
        // return Service::find($id);

        // return the view
        $service = Service::find($id);
        return view ('service.show')->with('service', $service);
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
       $service = Service::find($id);
       return view ('service.edit')->with('service', $service);
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

        // Update Service
        $Service = Service::find($id);
        $Service->user_id = $request->input('user_id');
        $Service->ticket_id = $request->input('ticket_id');
        $Service->first_recognition = $request->input('first_recognition');
        $Service->final_solution = $request->input('final_solution');
        $Service->order_id = $request->input('order_id');
        $Service->start_at = $request->input('start_at');
        $Service->expecting_finish_at = $request->input('expecting_finish_at');
        $Service->finish_at = $request->input('finish_at');
        $Service->fee = $request->input('fee');
        $Service->note = $request->input('note');
        $Service->save();

        // redirect with success message
        return redirect('/service')->with('success', 'Service Updated');
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
        $Service = Service::find($id);
        $Service->delete();

        // redirect with success message
        return redirect('/service')->with('success', 'Service Deleted');
    }
}
