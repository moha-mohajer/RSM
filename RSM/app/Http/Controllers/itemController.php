<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\Item;
// Use SQL qurry by bringing DB Librely
use  DB;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = item::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('item.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create Item
        $Item = new Item;
        $Item->obid = $request->input('obid');
        $Item->price = $request->input('price');
        $Item->sn = $request->input('sn');
        $Item->supid = $request->input('supid');
        $Item->cpr = $request->input('cpr');
        $Item->cc = $request->input('cc');
        $Item->cancled = $request->input('cancled');
        $Item->ordered = $request->input('ordered');
        $Item->arrived = $request->input('arrived');
        $Item->sold = $request->input('sold');
        $Item->stored = $request->input('stored');
        $Item->uid = $request->input('uid');
        $Item->note = $request->input('note');
        $Item->save();

        // redirect with success message
        return redirect('/item')->with('success', 'Item Created');

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
        // return Item::find($id);

        // return the view
        $item = Item::find($id);
        return view ('item.show')->with('item', $item);
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
       $item = Item::find($id);
       return view ('item.edit')->with('item', $item);
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

        // Update Item
        $Item = Item::find($id);
        $Item->obid = $request->input('obid');
        $Item->price = $request->input('price');
        $Item->sn = $request->input('sn');
        $Item->supid = $request->input('supid');
        $Item->cpr = $request->input('cpr');
        $Item->cc = $request->input('cc');
        $Item->cancled = $request->input('cancled');
        $Item->ordered = $request->input('ordered');
        $Item->arrived = $request->input('arrived');
        $Item->sold = $request->input('sold');
        $Item->stored = $request->input('stored');
        $Item->uid = $request->input('uid');
        $Item->note = $request->input('note');
        $Item->save();

        // redirect with success message
        return redirect('/item')->with('success', 'Item Updated');
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
        $Item = Item::find($id);
        $Item->delete();

        // redirect with success message
        return redirect('/item')->with('success', 'Item Deleted');
    }
}
