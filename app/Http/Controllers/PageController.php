<?php

namespace App\Http\Controllers;

use App\Models\contactInquire;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * View About Us Page.
     */
    public function aboutUs()
    {
        return view('about_us');
    }

    /**
     * View Contact Us Page.
     */
    public function contactUs()
    {
        return view('contact_us');
    }

    /**
     * Store Detail of contact us.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactUsStore(Request $request)
    {
        $request->validate([
            'first_name' => "required",
            'last_name' => "required",
            'email' => "required",
            'message' => "required"
        ]);

        contactInquire::query()->create([
            'first_name' => $request->post('first_name'),
            'last_name' => $request->post('last_name'),
            'email' => $request->post('email'),
            'message' => $request->post('message')
        ]);

        return redirect()->back()->with("success", "Thank you for contacting us! We have received your message and one of our representatives will be in touch with you as soon as possible.");
    }

    /**
     * View Faqs Page.
     */
    public function faqs()
    {
        return view('faq');
    }

    /**
     * View Privacy Policy Page.
     */
    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    /**
     * View Terms and Condition Page.
     */
    public function termsCondition()
    {
        return view('terms_and_condition');
    }

    /**
     * View Copyright Policy Page.
     */
    public function copyrightPolicy()
    {
        return view('copy_right');
    }
}
