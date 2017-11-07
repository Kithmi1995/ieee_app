<?php

namespace App\Http\Controllers\Auth;

use App\Mail\ConfirmSignup;
use App\Models\Company;
use App\Models\Employee;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|max:15',
            'type' => 'required|in:1,2',
            'password' => 'required|string|min:6|confirmed',
            'company_email' => 'email',
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

        $confirmation_code = str_random(20);
        $user =  User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'email' =>  ($data['type'] == 1)?$data['email']:(ends_with($data['email'], '@ieee.org'))?$data['email']:$data['email'].'@ieee.org',
            'dob' => $data['dob'],
            'type' => $data['type'],
            'confirmed' => 0,
            'confirmation_code' => $confirmation_code,
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
        ]);

        if ($data['type'] == 1){


            $company = new Company;
            $company->user_id = $user->id;
            $company->name = $data['company_name'];
            $company->email = $data['company_email'];
            $company->phone = $data['company_phone'];
            $company->save();
        }
        elseif ($data['type'] == 2){

            $employee = new Employee;
            $employee->user_id = $user->id;
            $employee->save();
        }


        try{
            Mail::to($user->email)->send(new ConfirmSignup($user));
        }
        catch (\Exception $exception){
            return $user;
        }

//        Mail::to($user->email)->send(new ConfirmSignup($user));


        return $user;

    }
}
