<?php

namespace App\Http\Controllers;

use App\Models\Job;
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
     */
    public function listJob()
    {
        $jobs = Job::query()->where("is_bid_done", '=', 0)->latest()->paginate(4);

        return view('job.list_job', compact('jobs'));
    }


    public function detailJob($id)
    {
        $job = Job::query()->find($id);

        return view('job.job_detail',compact('job'));
    }

    /**
     * Search job data.
     */
    public function searchJob()
    {

    }
}
