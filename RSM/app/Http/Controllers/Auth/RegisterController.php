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
      'status' => ['required'],
      'access_level' => ['required'],
      'name' => ['required', 'string', 'max:255'],
      'surname' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'language' => ['required'],
      'user_id' => ['required', 'integer']
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
      'status'=> "DeActive",
      'access_level' => "Customer",
      'name' => $data['name'],
      'surname' => $data['surname'],
      'email' => $data['email'],
      'user_name' => $data['user_name'],
      'password' => Hash::make($data['password']),
      'phone_number' => $data['phone_number'],
      'language' => $language,
      'date_of_birth' => $data['date_of_birth'],
      'access_level' => $data['access_level'],
      'address' => $data['address'],
      'photo' => $data['photo'],
      'note' => $data['note'],
      'user_id' => $data['user_id'],
    ]);
  }
}
