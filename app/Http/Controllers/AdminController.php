<?php

namespace App\Http\Controllers;

use App\Models\contactInquire;
use App\Models\Job;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

    /**
     * Contact Inquiry.
     */
    public function contactInquiry()
    {
        $data = contactInquire::query()->paginate(10);

        return view('admin.contact_inquiry', compact('data'));
    }

    /**
     * Users List
     */
    public function users()
    {
        $total_users = User::query()->count();
        $total_client = User::query()->where("user_type", 1)->count();
        $total_freelancer = User::query()->where("user_type", 0)->count();

        return view('admin.users', compact('total_users', 'total_client', 'total_freelancer'));
    }

    /**
     * List of user details
     *
     * @param $user_id
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function userDetails($user_id)
    {
        $user_details = User::query()->where('id', $user_id)->with(['user_detail'])->first();

        return view('admin.user-details', compact('user_details'));
    }

    /**
     * Users Data for datatable
     */
    public function usersData()
    {
        $data = User::query()
            ->select('id', 'name', 'email', 'user_type', 'created_at')
            ->get();

        return Datatables::of($data)->addIndexColumn()
            ->editColumn('user_type', function ($row) {
                $html = $row->user_type == 1 ? '<span class="btn btn-success btn-sm">Company</span>' : '<span class="btn btn-warning btn-sm">Freelancer</span>';
                return $html;
            })
            ->editColumn('created_at', function ($row) {
                return date('d M y', strtotime($row->created_at));
            })
            ->addColumn('action', function ($row) {
                $view_btn = '<a href="' . url('dashboard/user-details/' . $row->id . '') . '" class="btn btn-primary btn-sm">View</a>';
                return $view_btn;
            })
            ->rawColumns(['action', 'user_type', 'created_at'])
            ->make(true);
    }

}
