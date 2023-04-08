<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Job;
use App\Models\Payment;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Yajra\DataTables\Facades\DataTables;
use function Symfony\Component\Process\findArguments;

class ProfileController extends Controller
{

    public function userProfile()
    {
        // fetch auth user id
        $user_id = auth()->user()->id;

        // query for fetching user data
        $user_detail = User::query()->find($user_id);

        return view('profile.user_profile.user_profile', compact('user_detail'));
    }

    public function userProfileEdit($id)
    {
        $user = User::query()->where("id", '=', $id)->with(['user_detail'])->first();

        return view('profile.user_profile.user_profile_edit', compact('user'));
    }

    public function userProfileUpdate(Request $request)
    {
        $validation_data = [
            "name" => "required",
            "mobile_no" => "required",
            "email" => "required",
            "user_title" => "required|min:4",
            'skills' => 'required',
            'hourly_rate' => 'required|integer',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required'
        ];

        if (!$request->has('is_experience')) {

            $validation_data = array_merge($validation_data, [
                'job_title' => 'required',
                'job_company' => 'required'
            ]);

        }

        if (!$request->has('is_education')) {

            $validation_data = array_merge($validation_data, [
                'school_name' => 'required',
                'degree_title' => 'required',
                'field_of_study' => 'required'
            ]);
        }

        // validate data
        $request->validate($validation_data);

        $user_id = auth()->user()->id;

        // user details
        $data_to_update = [
            'user_title' => $request->post('user_title'),
            'user_description' => $request->post('user_description'),
            'skills' => $request->post('skills'),
            'hourly_rate' => $request->post('hourly_rate'),
            'city' => $request->post('city'),
            'state' => $request->post('state'),
            'country' => $request->post('country')
        ];

        if ($request->file('profile_photo_path')) {
            $image_path = $request->file('profile_photo_path')->store('user_profiles', 'public');

            $data_to_update["profile_photo_path"] = $image_path;

        }

        // update user details data
        UserDetail::query()->where("user_id", '=', $user_id)->update($data_to_update);

        // update education
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
                "education_description" => $request->post('education_description')
            ]);
        }

        // update users experience
        if ($request->has('is_experience')) {
            UserDetail::query()->where("user_id", '=', $user_id)->update([
                "is_experience" => 0
            ]);
        } else {

            UserDetail::query()->where("user_id", '=', $user_id)->update([
                "is_experience" => 1,
                "job_title" => $request->post('job_title'),
                "job_company" => $request->post('job_company'),
                "job_location" => $request->post('job_location'),
                "job_country" => $request->post('job_country'),
                "job_description" => $request->post('job_description')
            ]);
        }

        // update user details
        User::query()->where("id", '=', $user_id)->update([
            'name' => $request->post('name'),
            'mobile_no' => $request->post('mobile_no'),
            'email' => $request->post('email')
        ]);

        return redirect('user-profile');
    }

    public function companyProfile()
    {
        // fetch auth user id
        $user_id = auth()->user()->id;

        // query for fetching user data
        $company_detail = User::query()->find($user_id);

        return view('profile.company_profile.company_profile', compact('company_detail'));
    }

    public function companyProfileUpdate(Request $request)
    {
        $request->validate([
            "company_name" => "required",
            "email" => "required",
            "city" => "required",
            "state" => "required",
            "country" => "required",
            "mobile_no" => "required"
        ]);

        $user_id = auth()->user()->id;

        $data_to_update = [
            'company_name' => $request->post('company_name'),
            'city' => $request->post('city'),
            'state' => $request->post('state'),
            'country' => $request->post('country'),
            'company_description' => $request->post('company_description')
        ];

        if ($request->file('profile_photo_path')) {
            $image_path = $request->file('profile_photo_path')->store('user_profiles', 'public');

            $data_to_update["profile_photo_path"] = $image_path;

        }

        UserDetail::query()->where("user_id", '=', $user_id)->update($data_to_update);

        User::query()->where("id", '=', $user_id)->update([
            "mobile_no" => $request->post("mobile_no"),
            "email" => $request->post("email")
        ]);

        return redirect('company-profile');
    }

    /**
     * View Bid by user.
     *
     * @param Request $request
     * @return Factory|View|JsonResponse
     * @throws \Exception
     */
    public function viewUserBid(Request $request)
    {
        $data = Bid::query()->where("user_id", '=', auth()->user()->id)->with(["job_detail"])->get();

        return view('profile.user_profile.bid_details', compact('data'));
    }

    /**
     * view company project detail and bid by user
     */
    public function viewCompanyProject()
    {
        $Job_detail = Job::query()
            ->where('user_id', auth()->user()->id)
            ->get();

        foreach ($Job_detail as $key => $item) {

            $bid_detail = Bid::query()->where("bid_status", '=', 1)
                ->where("user_id", '=', $item->is_bid_done)
                ->where("job_id", '=', $item->id)
                ->first();

            $Job_detail[$key]["bid_details"] = $bid_detail;
        }

        return view('profile.company_profile.project', compact('Job_detail'));
    }

    /**
     * view project detail with user binding data
     *
     * @param $project_id
     * @return Factory|View
     */
    public function viewUserBidOnProject($project_id)
    {
        $data = Bid::query()->where("job_id", '=', $project_id)
            ->with(['user_detail', 'job_detail'])
            ->get();

        return view('profile.company_profile.project_bid_detail', compact('data'));
    }

    /**
     * Approve or reject Bid of user
     *
     * @param $user_id
     * @param $project_id
     * @return RedirectResponse|Redirector
     */
    public function approveBidProject($user_id, $project_id)
    {
        // update user id in jobs table
        Job::query()->where("id", '=', $project_id)->update([
            "is_bid_done" => $user_id
        ]);

        // update reject status in bids table
        Bid::query()->where("job_id", '=', $project_id)->update([
            "bid_status" => 2 // rejected
        ]);

        // update success status to the user
        Bid::query()->where("job_id", '=', $project_id)->where("user_id", '=', $user_id)->update([
            "bid_status" => 1 // approved
        ]);

        return redirect('/company-profile/project');

    }

    /**
     * View Project List of user, which is being approved by company.
     */
    public function listUserApprovedProject()
    {
        $data = Job::query()
            ->where('is_bid_done', auth()->user()->id)
            ->with(['user', 'user_details'])
            ->get();

        foreach ($data as $key => $item) {

            $bid_detail = Bid::query()
                ->where("bid_status", '=', 1)
                ->where("user_id", '=', auth()->user()->id)
                ->where("job_id", '=', $item->id)
                ->first();

            $data[$key]["bid_details"] = $bid_detail;
        }

        return view('profile.user_profile.project_list', compact('data'));
    }

    /**
     * User Transaction.
     */
    public function usersTransaction()
    {
        $payment_detail = Payment::query()
            ->where("receiver_id", '=', auth()->user()->id)
            ->with(['job_detail'])
            ->get();

        foreach ($payment_detail as $key => $item) {

            $company_detail = UserDetail::query()
                ->where("user_id", '=', $item->job_detail->user_id)
                ->select(["user_id", "company_name"])
                ->first();

            $payment_detail[$key]["company_detail"] = $company_detail;
        }

        return view('profile.user_profile.transaction', compact('payment_detail'));
    }

    /**
     * Company Transaction.
     */
    public function companyTransaction()
    {
        $payment_detail = Payment::query()
            ->where("sender_id", '=', auth()->user()->id)
            ->with(['job_detail'])
            ->get();

        foreach ($payment_detail as $key => $item) {

            $user_detail = User::query()
                ->where("id", '=', $item->receiver_id)
                ->select(["id", "name"])
                ->first();

            $payment_detail[$key]["user_detail"] = $user_detail;
        }

        return view('profile.company_profile.transaction', compact('payment_detail'));
    }

    /**
     * For General view of user profile.
     *
     * @param $user_id
     * @return Factory|View
     */
    public function userGeneralView($user_id)
    {
        $user_detail = User::query()
            ->where("id", '=', $user_id)
            ->with(["user_detail"])
            ->first();

        return view('user_details', compact('user_detail'));
    }

    /**
     * For General view of company profile.
     *
     * @param $company_id
     * @return Factory|View
     */
    public function companyGeneralView($company_id)
    {
        $company_detail = User::query()
            ->where("id", '=', $company_id)
            ->with(["user_detail"])
            ->first();

        return view('company_details', compact('company_detail'));

    }

}
