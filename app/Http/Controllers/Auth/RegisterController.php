<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use \Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
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
    protected $redirectTo = '/';
    protected $redirect = "/login#register";

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required',
            'password' => 'required|string|min:6'
        ]);
    }

    public function register(Request $request)
    {
        $validators = $this->validator([
            "name" => $request['new-name'],
            "email" => $request['new-email'],
            "contact" => $request['new-contact'],
            "password" => $request['new-password']
        ]);
            if ($validators->fails()) {
            return redirect('/login#register')
                        ->withErrors($validators)
                        ->withInput();
        }
        $user = $this->create([
            "name" => $request['new-name'],
            "email" => $request['new-email'],
            "contact" => $request['new-contact'],
            "password" => $request['new-password']
        ]);
        event(new Registered($user));

        $this->guard()->login($user);


        return $this->registered($request, $user)
                        ?: redirect('/home');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            "contact" => $data['contact'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function showRegistrationForm()
    {
        return redirect('/login#register');
    }
}
