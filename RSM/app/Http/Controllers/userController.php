<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Use hashing the password
use Illuminate\Support\Facades\Hash;
// Use Eloquent
use App\User;
// Use SQL qurry by bringing DB Librely
use  DB;
// image usage libraly
use Illuminate\Support\Facades\Storage;

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

        // Validation of input data
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            'photo' =>'image|nullable|max:1999'
        ]);

        //Handel file upload
        if($request->hasFile('photo')){

            // Get filename with the extension
            $fileNameToExt = $request->file('photo')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameToExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload imagen
            $path = $request->file('photo')->storeAs('public/photo', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        // Create User
        $user = new User;
        $user->status = "DeActive";
        $user->access_level = '0';
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->phone_number = $request->input('phone_number');
        $language = $request->input('language');
        $language = implode(', ', $language);
        $user->language = $language;
        $user->date_of_birth = $request->input('date_of_birth');
        $user->address = $request->input('address');
        $user->photo = $fileNameToStore;
        $user->note = $request->input('note');
        $user->user_id = $request->input('user_id');
        $user->save();

        // redirect with success message
        return redirect('/User')->with('success', 'User Created');

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

        // Validation of input data
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            'photo' =>'image|nullable|max:1999'
        ]);

        //Handel file upload
        if($request->hasFile('photo')){

            // Get filename with the extension
            $fileNameToExt = $request->file('photo')->getClientOriginalName();

            // Get just file name
            $fileName = pathinfo($fileNameToExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('photo')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;

            //Upload imagen
            $path = $request->file('photo')->storeAs('public/photo', $fileNameToStore);

        }

        // Update User
        $user = User::find($id);
        $status=$request->input('status');
        if(isset($status)){
            $user->status = "DeActive";
        }
        $access_level=$request->input('access_level');
        if(isset($access_level)){
            $user->access_level = '0';
        }
        $password=$request->input('password');
        if(isset($password)){
            $user->password = Hash::make($password);
        }
        $language = $request->input('language');
        if(isset($language)){
            $language = implode(', ', $language);
            $user->language = $language;
        }
        if($request->hasFile('photo')){
            $userphoto = $fileNameToStore;
          }
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->phone_number = $request->input('phone_number');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->address = $request->input('address');
        $user->note = $request->input('note');
        $user->user_id = $request->input('user_id');
        
        $user->save();

        // redirect with success message
        return redirect('/User')->with('success', 'User Updated');
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
        $user = User::find($id);

        // // Check for correct user
        // if(auth()->user()->id !== $post->user->id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');
        // }
        // Remove user photo
        if($post->photo !== 'noimage.jpg'){
            Storage::delete('public/photo/'.$post->photo);
        }

        $user->delete();

        // redirect with success message
        return redirect('/User')->with('success', 'User Deleted');
    }
}
