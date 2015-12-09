<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $redirectTo = '/';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'username' => 'required|max:255|unique:tbl_users',
            'email' => 'required|email|max:255|unique:tbl_users',
            'password' => 'required|min:6',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'insertion' => 'required|max:255',
            'phone_nr' => 'required|max:255',
            'birthdate' => 'required|max:255',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house_nr' => 'required|max:255',
            'postalcode' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_BCRYPT, ['cost' => 10]),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'insertion' => $data['insertion'],
            'phone_nr' => $data['phone_nr'],
            'birthdate' => $data['birthdate'],
            'city' => $data['city'],
            'street' => $data['street'],
            'house_nr' => $data['house_nr'],
            'postalcode' => $data['postalcode'],
        ]);
    }
}
