<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use Eloquent
use App\User;
// Use SQL qurry by bringing DB Librely
use  DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::orderBy('created_at', 'desc')->paginate(10);

        // Load the view
        return view ('user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load up the view
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create User
        $User = new User;
        $User->status = "DeActive";
        $User->access_level = "Customer";
        $User->name = $request->input('name');
        $User->surname = $request->input('surname');
        $User->email = $request->input('email');
        $User->user_name = $request->input('user_name');
        $User->password = Hash::make($request->input('password'));
        $User->phone_number = $request->input('phone_number');
        $language= $request->input('language');
        $language = implode(', ', $language);
        $User->language = $language;
        $User->date_of_birth = $request->input('date_of_birth');
        $User->access_level = $request->input('access_level');
        $User->address = $request->input('address');
        $User->photo = $request->input('photo');
        $User->note = $request->input('note');
        $User->user_id = $request->input('user_id');
        $User->save();

        // redirect with success message
        return redirect('/user')->with('success', 'User Created');

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
        // return User::find($id);

        // return the view
        $user = User::find($id);
        return view ('user.show')->with('user', $user);
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
       $user = User::find($id);
       return view ('user.edit')->with('user', $user);
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

        // Update User
        $User->status = "DeActive";
        $User->access_level = "Customer";
        $User->name = $request->input('name');
        $User->surname = $request->input('surname');
        $User->email = $request->input('email');
        $User->user_name = $request->input('user_name');
        $User->password = Hash::make($request->input('password'));
        $User->phone_number = $request->input('phone_number');
        $language= $request->input('language');
        $language = implode(', ', $language);
        $User->language = $language;
        $User->date_of_birth = $request->input('date_of_birth');
        $User->access_level = $request->input('access_level');
        $User->address = $request->input('address');
        $User->photo = $request->input('photo');
        $User->note = $request->input('note');
        $User->user_id = $request->input('user_id');
        $User->save();

        // redirect with success message
        return redirect('/user')->with('success', 'User Updated');
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
        $User = User::find($id);
        
        $User->delete();

        // redirect with success message
        return redirect('/user')->with('success', 'User Deleted');
    }
}
