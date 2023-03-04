<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * view of login page.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Login Store process
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public
    function loginStore(Request $request)
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
    public
    function register()
    {
        return view('auth.register');
    }

    // Store Register Data
    public
    function registerStore(Request $request)
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

        // check password and confirm password are same
        if ($request->post('password') != $request->post('confirm_password')) {
            return back()->withErrors(["message" => "password and confirm password must be same"]);
        }

        //check email exist or not
        if (User::query()->where('email', '=', $request->post('email'))->count() > 0) {
            return back()->withErrors(["message" => "Email already exist. please try another one"]);
        }

        // combine first name and last name to $name
        $name = $request->post("first_name") . ' ' . $request->post("last_name");

        // insert data
        $user = User::query()->create([
            "name" => $name,
            "mobile_no" => $request->post('mobile_no'),
            "email" => $request->post('email'),
            "password" => Hash::make($request->post('password')),
            "user_type" => $request->post('user_type')
        ]);

        $user_id = $user->id;

        // create entry on user_details table
        UserDetail::query()->create([
            "user_id" => $user_id
        ]);

        // set user id in session
        Session::put('register_user_id', $user_id);

        return redirect('/user-detail/introduction');
    }

    /**
     * get user data(name) from new register id.
     *
     * @param $id
     * @return mixed|null
     */
    public function getDataOnUserId($id)
    {
        if ($id) {
            $name = User::query()->find($id, ["name"]);
            return $name->name;
        }

        return null;
    }

    public function introduction()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.introduction', compact("user_name"));
    }

    public function title()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.title', compact("user_name"));
    }

    public function titleStore(Request $request)
    {
        $request->validate([
            'user_title' => 'required|min:4'
        ]);

        $user_id = Session::get('register_user_id');

        UserDetail::query()->where("user_id", '=', $user_id)->update([
            "user_title" => $request->post('user_title')
        ]);

        return redirect('/user-detail/work_experience');
    }

    public function workExperience()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.work_experience', compact("user_name"));
    }

    public function workExperienceStore(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'job_company' => 'required',
            'job_start_month' => 'required',
            'job_start_year' => 'required',
        ]);

    }

    public function education()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.education', compact("user_name"));
    }

    public function educationStore(Request $request)
    {

    }

    public function languages()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.languages', compact("user_name"));
    }

    public function languagesStore(Request $request)
    {

    }

    public function skills()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.skills', compact("user_name"));
    }

    public function skillsStore(Request $request)
    {

    }

    public function rate()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.rate', compact("user_name"));
    }

    public function rateStore(Request $request)
    {

    }

    public function finalOverview()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.final_overview', compact("user_name"));
    }

    public function finalOverviewStore(Request $request)
    {

    }

}
