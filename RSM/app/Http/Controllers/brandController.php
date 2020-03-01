<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use hashing the password
use Illuminate\Support\Facades\Hash;
// Use Eloquent
use App\Brand;
// Use SQL qurry by bringing DB Librely
use  DB;
// image usage libraly
use Illuminate\Support\Facades\Storage;

class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = brand::orderBy('brand', 'desc')->paginate(10);

        // Load the view
        return view ('brand.index')->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('brand.create');
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
            'brand' =>'required'
        ]);

        //Handel file upload
        if($request->hasFile('brand_logo')){

            // Get filename with the extension
            $fileNameToExt = $request->file('brand_logo')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameToExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('brand_logo')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload imagen
            $path = $request->file('brand_logo')->storeAs('public/brand_logo', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        // Create brand
        $brand = new brand;
        $brand->brand = $request->input('brand');
        $brand->brand_logo = $fileNameToStore;
        $brand->note = $request->input('note');
        $brand->user_id = $request->input('user_id');
        $brand->save();

        // redirect with success message
        return redirect('/brand')->with('success', $brand->brand .= ' brand Created');

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
        // return brand::find($id);

        // return the view
        $brand = brand::find($id);
        return view ('brand.show')->with('brand', $brand);
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
       $brand = brand::find($id);
       return view ('brand.edit')->with('brand', $brand);
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

        // Validation of input data
        $this->validate($request,[
            'brand' =>'required',
        ]);

        //Handel file upload
        if($request->hasFile('brand_logo')){

            // Get filename with the extension
            $fileNameToExt = $request->file('brand_logo')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameToExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('brand_logo')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload imagen
            $path = $request->file('brand_logo')->storeAs('public/brand_logo', $fileNameToStore);

        }

        // Update brand
        $brand = brand::find($id);

        if($request->hasFile('brand_logo')){
            $brand->brand_logo = $fileNameToStore;
          }
        $brand->brand = $request->input('brand');
        $brand->note = $request->input('note');
        $brand->user_id = $request->input('user_id');
        
        $brand->save();

        // redirect with success message
        return redirect('/brand')->with('success', $brand->brand .= ' brand Updated');
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
        $brand = brand::find($id);

        // // Check for correct brand
        // if(auth()->brand()->id !== $brand->brand->id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }
        // Remove brand brand_logo
        if($brand->brand_logo !== 'noimage.jpg'){
            Storage::delete('public/brand_logo/'.$brand->brand_logo);
        }

        $brand->delete();

        // redirect with success message
        return redirect('/brand')->with('success', $brand->brand .= 'brand Deleted');
    }
}
