<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Invoice;
// Use SQL qurry by bringing DB Librely
use  DB;

class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = invoice::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('invoice.index')->with('invoices',$invoices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create Invoice
        $Invoice = new Invoice;
        $Invoice->customer_id = $request->input('customer_id');
        $Invoice->service_id = $request->input('service_id');
        $Invoice->item_id = $request->input('item_id');
        $Invoice->tax = $request->input('tax');
        $Invoice->total = $request->input('total');
        $Invoice->dicount = $request->input('dicount');
        $Invoice->pay = $request->input('pay');
        $Invoice->note = $request->input('note');
        $Invoice->save();

        // redirect with success message
        return redirect('/invoice')->with('success', 'Invoice Created');

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
        // return Invoice::find($id);

        // return the view
        $invoice = Invoice::find($id);
        return view ('invoice.show')->with('invoice', $invoice);
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
       $invoice = Invoice::find($id);
       return view ('invoice.edit')->with('invoice', $invoice);
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

        // Update Invoice
        $Invoice = Invoice::find($id);
        $Invoice->customer_id = $request->input('customer_id');
        $Invoice->service_id = $request->input('service_id');
        $Invoice->item_id = $request->input('item_id');
        $Invoice->tax = $request->input('tax');
        $Invoice->total = $request->input('total');
        $Invoice->dicount = $request->input('dicount');
        $Invoice->pay = $request->input('pay');
        $Invoice->note = $request->input('note');
        $Invoice->save();

        // redirect with success message
        return redirect('/invoice')->with('success', 'Invoice Updated');
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
        $Invoice = Invoice::find($id);
        $Invoice->delete();

        // redirect with success message
        return redirect('/invoice')->with('success', 'Invoice Deleted');
    }
}
