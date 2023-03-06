<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function userProfile()
    {
        // fetch auth user id
        $user_id = auth()->user()->id;

        // query for fetching user data
        $user_detail = User::query()->find($user_id);

        return view('profile.user_profile', compact('user_detail'));
    }

    public function userProfileUpdate(Request $request)
    {
        $request->validate([
            "city" => "required",
            "state" => "required",
            "country" => "required",
            "mobile_no" => "required",
            "skills" => "required",
            "hourly_rate" => "required"
        ]);

        $user_id = auth()->user()->id;

        $data_to_update = [
            'city' => $request->post('city'),
            'state' => $request->post('state'),
            'country' => $request->post('country'),
            'skills' => $request->post('skills'),
            'hourly_rate' => $request->post('hourly_rate'),
            'user_description' => $request->post('user_description')
        ];

        if ($request->file('profile_photo_path')) {
            $image_path = $request->file('profile_photo_path')->store('user_profiles', 'public');

            $data_to_update["profile_photo_path"] = $image_path;

        }

        UserDetail::query()->where("user_id", '=', $user_id)->update($data_to_update);

        User::query()->where("id", '=', $user_id)->update([
            "mobile_no" => $request->post("mobile_no")
        ]);

        return redirect('user-profile');
    }

    public function companyProfile()
    {
        // fetch auth user id
        $user_id = auth()->user()->id;

        // query for fetching user data
        $company_detail = User::query()->find($user_id);

        return view('profile.company_profile', compact('company_detail'));
    }

    public function companyProfileUpdate(Request $request)
    {
        $request->validate([
            "city" => "required",
            "state" => "required",
            "country" => "required",
            "mobile_no" => "required"
        ]);

        $user_id = auth()->user()->id;

        $data_to_update = [
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
            "mobile_no" => $request->post("mobile_no")
        ]);

        return redirect('company-profile');
    }
}
