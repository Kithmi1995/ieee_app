<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->confirmed == 0){
            return view('auth.confirm');
        }
        else{
            if (auth()->user()->type == 1){
                $employees = Employee::all();
                return view('auth.company_home', ['employees' => $employees, 'type'=>1]);
            }
            else{
                $employee = Employee::where('user_id', auth()->user()->id)->first();
                return view('auth.emp_home', ['employee' => $employee, 'type'=>2]);
            }

        }
    }

    public function confirm(Request $request){
        $code = $request->input('confirmation_code');

        return $this->confirm_mail($code);
    }

    public function confirm_mail($code){

        if (auth()->user()->confirmation_code == $code){
            User::where('id', auth()->user()->id)
                ->update([
                'confirmation_code' => null,
                'confirmed' => 1,
            ]);

            return redirect()->to('/home');
        }
        else{
            return "Invalid verification code was provided.";
        }

    }
}
