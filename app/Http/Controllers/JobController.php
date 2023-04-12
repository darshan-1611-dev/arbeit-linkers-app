<?php

namespace App\Http\Controllers;

use App\Jobs\JobRecommendationEmail;
use App\Models\Bid;
use App\Models\Job;
use App\Models\JobSearchKeyword;
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
        $inserted_job = Job::query()->create([
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

        // check new job which is suitable for users
        $this->checkJobDetailWithRecentSearch($inserted_job->id);

        return redirect('/company-profile/project');
    }

    public function editJob($id)
    {
        $job = Job::query()->find($id);

        return view("job.update_job", compact('job'));
    }

    public function updateJob(Request $request)
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

        $job_id = $request->post("job_id");

        Job::query()->where("id", $job_id)->update([
            'project_title' => $request->post('project_title'),
            'project_description' => $request->post('project_description'),
            'job_type' => $request->post('job_type'),
            'skills' => $request->post('skills'),
            'min_salary' => $request->post('min_salary'),
            'max_salary' => $request->post('max_salary'),
            'job_duration' => $request->post('job_duration'),
            'experience_level' => $request->post('experience_level'),
        ]);

        return redirect('/company-profile/project');
    }

    public function deleteJob($id)
    {
        Job::query()->find($id)->delete();

        return redirect('/company-profile/project');
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

            $jobs = Job::search($request->get('job_search'))->where("is_bid_done", 0)
                ->paginate(6);

            // check job found or not
            if ($jobs->count() == 0 && !empty($request->get('job_search'))) {
                $this->jobNotFindInSearch($request->get('job_search'));
            }

        } else {
            $jobs = Job::query()
                ->where("is_bid_done", '=', 0)
                ->latest()
                ->paginate(6);
        }

        return view('job.list_job', compact('jobs'));
    }

    /**
     * if user didn't find any job matching search criteria,
     * we'll send you an email as soon as a company posts a job that matches user's search
     *
     * @param $search_keyword
     */
    public function jobNotFindInSearch($search_keyword)
    {
        $user_id = auth()->user()->id;
        $user_email = auth()->user()->email;

        // add search data to table
        JobSearchKeyword::query()->create([
            "user_id" => $user_id,
            "user_email" => $user_email,
            "search_text" => $search_keyword
        ]);

    }

    /**
     * check job whether match with search preferences and send mail.
     *
     * @param $job_id
     */
    public function checkJobDetailWithRecentSearch($job_id)
    {
        $search_data = JobSearchKeyword::query()->get();

        $result = array();

        foreach ($search_data as $item) {

            $jobs = Job::search($item->search_text)->where("id", $job_id)
                ->get();

            if ($jobs->count() > 0) {
                $result[$item->id]["job_detail"] = $jobs;
                $result[$item->id]["user_id"] = $item->user_id;
                $result[$item->id]["user_email"] = $item->user_email;
                $result[$item->id]["search_text"] = $item->search_text;
            }
        }

        // send mail
        $this->sendMailForJobRecommendation($result);
    }

    /**
     * Send Mail.
     *
     * @param $data
     */
    public function sendMailForJobRecommendation($data)
    {
        if (!empty($data)) {
            foreach ($data as $item) {

                dispatch(new JobRecommendationEmail($item));
            }
        }
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
     * Cancel Bid.
     *
     * @param $id
     * @return RedirectResponse|Redirector
     */
    public function retractBid($id)
    {
        Bid::query()->find($id)->delete();

        return redirect('user-profile/bid');
    }
}
