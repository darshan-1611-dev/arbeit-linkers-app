<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Job;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class JobController extends Controller
{
    /**
     * view create job form.
     *
     */
    public function createJob()
    {
        return view("job.create_job");
    }

    /**
     * store job data.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function storeJob(Request $request)
    {
        $request->validate([
            'project_title' => 'required',
            'project_description' => 'required|min:100',
            'job_type' => 'required',
            'skills' => 'required',
            'min_salary' => 'required',
            'max_salary' => 'required',
            'job_duration' => 'required',
            'experience_level' => 'required',
        ]);

        // fetch user id
        $user_id = auth()->user()->id;

        //insert data on job table
        Job::query()->create([
            "user_id" => $user_id,
            'project_title' => $request->post('project_title'),
            'project_description' => $request->post('project_description'),
            'job_type' => $request->post('job_type'),
            'skills' => $request->post('skills'),
            'min_salary' => $request->post('min_salary'),
            'max_salary' => $request->post('max_salary'),
            'job_duration' => $request->post('job_duration'),
            'experience_level' => $request->post('experience_level'),
        ]);

        return redirect('/');
    }

    /**
     * list all job.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function listJob(Request $request)
    {
        if ($request->has('job_search')) {
//            $jobs = Job::search($request->get('job_search'))->where("is_bid_done", 0)
//                ->paginate(6);
            $jobs = Job::search($request->get('job_search'))
                ->paginate(6);
        } else {
            $jobs = Job::query()
//                ->where("is_bid_done", '=', 0)
                ->latest()
                ->paginate(6);
        }


        return view('job.list_job', compact('jobs'));
    }

    /**
     * View detail job by project id.
     */
    public function detailJob($id)
    {
        $job = Job::query()->find($id);

        $is_bid = Bid::query()
            ->where("job_id", '=', $job->id)
            ->where("user_id", '=', auth()->user()->id)
            ->exists();

        return view('job.job_detail', compact('job', 'is_bid'));
    }

    /**
     * Bid project.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function bid(Request $request)
    {
        $request->validate([
            "price" => "required",
            "time_duration" => "required",
            "description" => "required",
        ]);

        Bid::query()->create([
            'user_id' => auth()->user()->id,
            'job_id' => $request->post('job_id'),
            'price' => $request->post('price'),
            'time_duration' => $request->post('time_duration'),
            'description' => $request->post('description')
        ]);

        return redirect('/user-profile/bid');
    }

    /**
     * Search job data.
     */
    public function searchJob()
    {

    }
}
