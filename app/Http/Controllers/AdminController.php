<?php

namespace App\Http\Controllers;

use App\Models\contactInquire;
use App\Models\Job;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Dashboard Home Page.
     */
    public function index()
    {
        $data = $this->getTotalNumber();

        return view('admin.home', compact('data'));
    }

    public function getTotalNumber()
    {
        $total_users = User::query()->count();
        $total_jobs = Job::query()->count();
        $total_transaction = Payment::query()->sum('amount');

        $recent_user = User::query()->select(["id", "name", "created_at", "user_type"])->latest()->take(5)->get();

        return [
            "total_users" => $total_users,
            "total_jobs" => $total_jobs,
            "total_transaction" => $total_transaction,
            "recent_user" => $recent_user
        ];
    }

    public function contactInquiry()
    {
        $data = contactInquire::query()->paginate(10);

        return view('admin.contact_inquiry', compact('data'));
    }
}
