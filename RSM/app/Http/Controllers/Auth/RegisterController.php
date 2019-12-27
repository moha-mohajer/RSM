<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */
  
  use RegistersUsers;
  
  /**
  * Where to redirect users after registration.
  *
  * @var string
  */
  protected $redirectTo = '/home';
  
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest');
  }
  
  /**
  * Get a validator for an incoming registration request.
  *
  * @param  array  $data
  * @return \Illuminate\Contracts\Validation\Validator
  */
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'surname' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'language' => ['required'],
    ]);
  }
  
  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return \App\User
  */
  
  protected function create(array $data)
  {
    $language= $data['language'];
    $language = implode(', ', $language);
    
    return User::create([
      'name' => $data['name'],
      'surname' => $data['surname'],
      'email' => $data['email'],
      'user_name' => $data['user_name'],
      'password' => Hash::make($data['password']),
      'phone_number' => $data['phone_number'],
      'language' => $language,
      
      // $user->language = $request->input('language');
      // $user->date_of_birth = $request->input('date_of_birth');
      // $user->access_level = $request->input('access_level');
      // $user->address = $request->input('address');
      // $user->photo = $request->input('photo');
      // $user->note = $request->input('note');
      // $user->user_id = $request->input('user_id');
      // $user->remember_token = $request->input('remember_token');
      // $user->status = $request->input('status');
      // $user->created_at = $request->input('created_at');
      // $user->updated_at = $request->input('updated_at');
    ]);
  }
}
