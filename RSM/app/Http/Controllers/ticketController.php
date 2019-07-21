<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Order;
// Use SQL qurry by bringing DB Librely
use  DB;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('order.index')->with('orders',$orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create Order
        $Order = new Order;
        $Order->cid = $request->input('cid');
        $Order->did = $request->input('did');
        $Order->description = $request->input('description');
        $Order->Color = $request->input('Color');
        $Order->PN = $request->input('PN');
        $Order->UnitMeasurment = $request->input('UnitMeasurment');
        $Order->quantity = $request->input('quantity');
        $Order->uid = $request->input('uid');
        $Order->note = $request->input('note');
        $Order->save();

        // redirect with success message
        return redirect('/order')->with('success', 'Order Created');

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
        // return Order::find($id);

        // return the view
        $order = Order::find($id);
        return view ('order.show')->with('order', $order);
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
       $order = Order::find($id);
       return view ('order.edit')->with('order', $order);
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

        // Update Order
        $Order = Order::find($id);
        $Order->cid = $request->input('cid');
        $Order->did = $request->input('did');
        $Order->description = $request->input('description');
        $Order->Color = $request->input('Color');
        $Order->PN = $request->input('PN');
        $Order->UnitMeasurment = $request->input('UnitMeasurment');
        $Order->quantity = $request->input('quantity');
        $Order->uid = $request->input('uid');
        $Order->note = $request->input('note');
        $Order->save();

        // redirect with success message
        return redirect('/order')->with('success', 'Order Updated');
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
        $Order = Order::find($id);
        $Order->delete();

        // redirect with success message
        return redirect('/order')->with('success', 'Order Deleted');
    }
}
