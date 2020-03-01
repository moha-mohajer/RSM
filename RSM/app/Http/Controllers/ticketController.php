<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Ticket;
// Use SQL qurry by bringing DB Librely
use  DB;

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = ticket::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('ticket.index')->with('tickets',$tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create Ticket
        $Ticket = new Ticket;
        $Ticket->customer_id = $request->input('customer_id');
        $Ticket->device_id = $request->input('device_id');
        $Ticket->description = $request->input('description');
        $Ticket->security_type = $request->input('security_type');
        $Ticket->security_code = $request->input('security_code');
        $Ticket->Belonging = $request->input('Belonging');
        $Ticket->ticket_tag = $request->input('ticket_tag');
        $Ticket->user_id = $request->input('user_id');
        $Ticket->note = $request->input('note');
        $Ticket->save();

        // redirect with success message
        return redirect('/ticket')->with('success', 'Ticket Created');

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
        // return Ticket::find($id);

        // return the view
        $ticket = Ticket::find($id);
        return view ('ticket.show')->with('ticket', $ticket);
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
       $ticket = Ticket::find($id);
       return view ('ticket.edit')->with('ticket', $ticket);
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

        // Update Ticket
        $Ticket = Ticket::find($id);
        $Ticket->customer_id = $request->input('customer_id');
        $Ticket->customer_id = $request->input('device_id');
        $Ticket->description = $request->input('description');
        $Ticket->security_type = $request->input('security_type');
        $Ticket->security_code = $request->input('security_code');
        $Ticket->Belonging = $request->input('Belonging');
        $Ticket->ticket_tag = $request->input('ticket_tag');
        $Ticket->user_id = $request->input('user_id');
        $Ticket->note = $request->input('note');
        $Ticket->save();

        // redirect with success message
        return redirect('/ticket')->with('success', 'Ticket Updated');
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
        $Ticket = Ticket::find($id);
        
        $Ticket->delete();

        // redirect with success message
        return redirect('/ticket')->with('success', 'Ticket Deleted');
    }
}
