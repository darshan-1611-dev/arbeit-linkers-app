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
    const ADMIN_EMAIL = "admin@arbeitlinkers.com";

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

            // check is admin and redirect according to user.
            return $this->checkIsAdminId($request->get('email')) ? redirect('/dashboard') : redirect('/');

        } else {
            return back()->withErrors(["success" => false, "message" => "email or password incorrect"]);
        }
    }

    /**
     * Check it is Admin Credentials
     *
     * @param $email
     * @return bool
     */
    public function checkIsAdminId($email)
    {
        if ($email == $this::ADMIN_EMAIL) {
            return true;
        }

        return false;
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
            'mobile_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
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
     * Log Out
     */
    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
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

        // to check user either freelancer or client
        $user_type = User::query()->find(Session::get('register_user_id'), "user_type")->user_type;

        return view('auth.user_details.introduction', compact("user_name", "user_type"));
    }

    /**
     * Company detail form
     */
    public function company()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.company_details.company_details', compact("user_name"));
    }

    /**
     * Store Company detail
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function companyStore(Request $request)
    {
        $request->validate([
            "company_name" => 'required',
            "country" => 'required',
            "state" => 'required',
            "city" => 'required',
            "profile_photo_path" => 'required',
        ]);

        $user_id = Session::get('register_user_id');

        // store image
        $image_path = $request->file('profile_photo_path')->store('user_profiles', 'public');

        UserDetail::query()->where("user_id", '=', $user_id)->update([
            "company_name" => $request->post('company_name'),
            "country" => $request->post('country'),
            "state" => $request->post('state'),
            "city" => $request->post('city'),
            "profile_photo_path" => $image_path,
            "street_address" => $request->post('street_address'),
            "postal_code" => $request->post('postal_code'),
            "company_description" => $request->post('company_description'),
        ]);

        // auth user with id
        Auth::loginUsingId($user_id);

        return redirect('/company-profile');
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

        if (!$request->has('is_experience')) {

            if ($request->has('is_working')) {
                $request->validate([
                    'job_title' => 'required',
                    'job_company' => 'required',
                    'job_start_month' => 'required',
                    'job_start_year' => 'required',
                ]);
            } else {
                $request->validate([
                    'job_title' => 'required',
                    'job_company' => 'required',
                    'job_start_month' => 'required',
                    'job_start_year' => 'required',
                    'job_end_month' => 'required',
                    'job_end_year' => 'required',
                ]);
            }
        }

        $user_id = Session::get('register_user_id');

        if ($request->has('is_experience')) {
            UserDetail::query()->where("user_id", '=', $user_id)->update([
                "is_experience" => 0
            ]);

        } else {

            if ($request->has('is_working')) {
                $job_end_date = null;
                $is_working = 1;
            } else {
                $job_end_date = $request->post('job_end_month') . ' ' . $request->post('job_end_year');
                $is_working = 0;
            }

            UserDetail::query()->where("user_id", '=', $user_id)->update([
                "is_experience" => 1,
                "job_title" => $request->post('job_title'),
                "job_company" => $request->post('job_company'),
                "job_location" => $request->post('job_location'),
                "job_country" => $request->post('job_country'),
                "job_start_date" => $request->post('job_start_month') . ' ' . $request->post('job_start_year'),
                "job_end_date" => $job_end_date,
                "is_working" => $is_working,
                "job_description" => $request->post('job_description')
            ]);
        }

        return redirect('/user-detail/education');

    }

    public function education()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.education', compact("user_name"));
    }

    public function educationStore(Request $request)
    {
        if (!$request->has('is_education')) {
            $request->validate([
                'school_name' => 'required',
                'degree_title' => 'required',
                'field_of_study' => 'required',
                'education_start_date' => 'required',
                'education_end_date' => 'required',
            ]);
        }

        $user_id = Session::get('register_user_id');

        if ($request->has('is_education')) {
            UserDetail::query()->where("user_id", '=', $user_id)->update([
                "is_education" => 0
            ]);

        } else {

            UserDetail::query()->where("user_id", '=', $user_id)->update([
                "is_education" => 1,
                "school_name" => $request->post('school_name'),
                "degree_title" => $request->post('degree_title'),
                "field_of_study" => $request->post('field_of_study'),
                "education_start_date" => $request->post('education_start_date'),
                "education_end_date" => $request->post('education_end_date'),
                "education_description" => $request->post('education_description')
            ]);
        }

        return redirect('/user-detail/languages');
    }

    public function languages()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.languages', compact("user_name"));
    }

    public function languagesStore(Request $request)
    {
        $user_id = Session::get('register_user_id');

        UserDetail::query()->where("user_id", '=', $user_id)->update([
            "language" => $request->post('language'),
            "language_proficiency" => $request->post('language_proficiency')
        ]);

        return redirect('/user-detail/skills');
    }

    public function skills()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.skills', compact("user_name"));
    }

    public function skillsStore(Request $request)
    {
        $request->validate([
            'skills' => 'required'
        ]);

        $user_id = Session::get('register_user_id');

        UserDetail::query()->where("user_id", '=', $user_id)->update([
            "skills" => $request->post('skills'),
        ]);

        return redirect('/user-detail/rate');
    }

    public function rate()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.rate', compact("user_name"));
    }

    public function rateStore(Request $request)
    {
        $request->validate([
            'hourly_rate' => 'required|integer'
        ]);

        $user_id = Session::get('register_user_id');

        UserDetail::query()->where("user_id", '=', $user_id)->update([
            "hourly_rate" => $request->post('hourly_rate'),
        ]);

        return redirect('/user-detail/final_overview');

    }

    public function finalOverview()
    {
        $user_name = $this->getDataOnUserId(Session::get('register_user_id'));

        return view('auth.user_details.final_overview', compact("user_name"));
    }

    public function finalOverviewStore(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'profile_photo_path' => 'required',
        ]);

        $user_id = Session::get('register_user_id');

        // store image
        $image_path = $request->file('profile_photo_path')->store('user_profiles', 'public');

        UserDetail::query()->where("user_id", '=', $user_id)->update([
            "country" => $request->post('country'),
            "state" => $request->post('state'),
            "city" => $request->post('city'),
            "profile_photo_path" => $image_path,
            "street_address" => $request->post('street_address'),
            "postal_code" => $request->post('postal_code'),
            "user_description" => $request->post("user_description")
        ]);

        // auth user with id
        Auth::loginUsingId($user_id);

        return redirect('/user-profile');
    }

}
