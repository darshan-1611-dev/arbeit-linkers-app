<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * view of login page.
    */
    public function login(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.login');
    }

    /**
     * Login Store process
    */
    public function loginStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {

            // Authentication passed...
            return redirect('/');
        } else {
            return back()->withErrors(["success" => false, "message" => "email or password incorrect"]);
        }
    }

    // Register
    public function register()
    {
        return view('auth.register');
    }

    // Store Register Data
    public function registerStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'user_type' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        if($request->post('password') != $request->post('confirm_password')){
            return back()->withErrors(["success" => false, "message" => "passwoed and confrim password must be same"]);
        }

        
    }
}
