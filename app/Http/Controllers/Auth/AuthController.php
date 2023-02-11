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
    public function loginStore(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {

            // Authentication passed...
            return redirect('/');
        } else {
            return back()->with(["success" => false, "message" => "email or password incorrect"]);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerStore()
    {

    }
}
