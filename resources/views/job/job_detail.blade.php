@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/job.css") }}">
    <link rel="stylesheet" href="{{ asset("css/job_detail.css") }}">
@endpush

@section("body")
    <!-- Job Detail Section Start -->
    <section class="container">
        <div class="row mx-auto g-3">
            <div class="job-description col-lg-7 mx-auto">
                <div>
                    <div class="d-flex justify-content-between">
                        <h2>{{ $job->project_title }}</h2>
                        <div>
                            <form action="">
                                <input type="submit" value="Bid Now" class="btn fs-4 al-btn">
                            </form>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <span class="fs-5 text-muted">Posted at {{ $job->created_at->format('d M Y') }}</span>
                        <span class="fs-5 text-muted"><i class="fas fa-map-marker-alt me-2"></i>Worldwide</span>
                    </div>

                    <hr class="my-5">

                    <div>
                        <p>
                            {{ $job->project_description }}
                        </p>
                    </div>

                    <hr class="my-5">

                    <div class="row gy-5">
                        <div class="col-4">
                            <div>
                                <span class="fs-4 d-none d-lg-inline-block"><i class="fas fa-tags me-3"></i></span>
                                <span class="fs-4 fw-semibold">${{ $job->min_salary }} - ${{ $job->max_salary }}</span>
                            </div>
                            <div>
                                <p class="fs-4 text-muted ms-lg-5">Bid Price</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <span class="fs-4 d-none d-lg-inline-block"><i class="fas fa-cogs me-3"></i></span>
                                <span class="fs-4 fw-semibold">{{ $job->experience_level }} years</span>
                            </div>
                            <div>
                                <p class="fs-4 text-muted ms-lg-5">Experience Level</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div>
                                <span class="fs-4 d-none d-lg-inline-block"><i
                                        class="fas fa-business-time me-4"></i></span>
                                <span class="fs-4 fw-semibold">{{ $job->job_duration }} weeks</span>
                            </div>
                            <div>
                                <p class="fs-4 text-muted ms-lg-5">Time Deadline to complete</p>
                            </div>
                        </div>

                        <div class="col-4">
                            <div>
                                <span class="fs-4 d-none d-lg-inline-block"><i
                                        class="fas fa-map-marker-alt me-4"></i></span>
                                <span class="fs-4 fw-semibold">Remote Job</span>
                            </div>
                            <div>
                                <p class="fs-4 text-muted ms-lg-5">From Everywhere</p>
                            </div>
                        </div>


                        @php
                            $final_string = null;
                                function getJobType($job_type) {

                                    if ($job_type == 1){
                                        $final_string = "Full Time";
                                    }

                                    if ($job_type == 2){
                                        $final_string = "Part Time";
                                    }

                                    if ($job_type == 3){
                                        $final_string = "Contract Base";
                                    }

                                    return $final_string;
                                }

                        @endphp

                        <div class="col-4">
                            <div>
                                <span class="fs-4 d-none d-lg-inline-block"><i class="fas fa-briefcase me-3"></i></span>
                                <span class="fs-4 fw-semibold">{{ getJobType($job->job_type) }}</span>
                            </div>
                            <div>
                                <p class="fs-4 text-muted ms-lg-5">Project Type</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <span class="fs-4 d-none d-lg-inline-block"><i
                                        class="fas fa-file-contract me-4"></i></span>
                                <span class="fs-4 fw-semibold">Contract-to-hire</span>
                            </div>
                            <div>
                                <p class="fs-4 text-muted ms-lg-5">This job has the potential to turn into a full time
                                    role</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div>
                        <h5>Skills and Expertise</h5>
                        <div class="mt-5">
                            <ul class="d-flex skills flex-wrap">
                                @php
                                    $skills = explode(',', $job->skills);
                                @endphp

                                @foreach($skills as $skill)
                                    <li class="me-3 fs-4 rounded-pill py-2 px-4 mb-4">{{ $skill }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div>
                        <h4 class="d-inline-block">About the client</h4> <span class="fs-5 ms-5 text-muted">Member since {{ $job->user->created_at->format('M d, Y') }}</span>
                        <div class="mt-5 row">
                            <div class="col-5 col-sm-4 ">
                                <div>
                                    <span class="fs-4">{{ $job->user->name }}</span>
                                </div>
{{--                                <div>--}}
{{--                                    <p class="fs-4 text-muted d-inline-block">Scotts Valley, California</p>--}}
{{--                                </div>--}}
                            </div>
                            <div class="col-5 col-sm-4 ">
                                <div>
                                    <span class="fs-4">120 jobs posted</span>
                                </div>
                                <div>
                                    <p class="fs-4 text-muted d-inline-block">78% hire rate, 5 jobs open</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div>
                        <h5>Activity on this job</h5>
                        <div class="mt-5 row">
                            <div class="col-3 col-lg-3">
                                <div>
                                    <span class="fs-4">20 to 50</span>
                                </div>
                                <div>
                                    <p class="fs-4 text-muted d-inline-block">Proposals</p>
                                    <i class="fas fa-question-circle fs-4 ms-2" data-bs-toggle="tooltip"
                                       data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                       data-bs-title="This range includes relevant proposals, but does not include proposals that are withdrawn, declined, or archived. Please note that all proposals are accessible to clients on their applicants page."
                                       style="color: var(--text-green);"></i>
                                </div>
                            </div>
                            <div class="col-5 col-lg-4">
                                <div>
                                    <span class="fs-4">1 day ago</span>
                                </div>
                                <div>
                                    <p class="fs-4 text-muted d-inline-block">Last viewed by client</p>
                                    <i class="fas fa-question-circle fs-4 ms-2" data-bs-toggle="tooltip"
                                       data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                       data-bs-title="This is when the client last reviewed or interacted with the applicants for this job."
                                       style="color: var(--text-green);"></i>
                                </div>
                            </div>
                            <div class="col-3 col-lg-4">
                                <div>
                                    <span class="fs-4">5</span>
                                </div>
                                <div>
                                    <p class="fs-4 text-muted d-inline-block">Interviewing</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Login ad box  -->
            <div class="col-lg-4 d-none d-lg-inline-block" style="margin-top: 15rem;">
                <div class="login-box">
                    <h3>Create a free profile to find work like this</h3>
                    <div class="my-5 row">
                        <div class="mb-4 mt-5">
                            <input type="email" name="email" id="email" class="form-control fs-4 py-3"
                                   placeholder="Enter Email Address">

                        </div>
                        <div class="mb-4 mt-4">
                            <a href="sign_up.html" class="btn al-btn w-100">Sign Up</a>
                        </div>
                    </div>
                    <p class="line-heading my-5 text-center  text-muted w-100">or</p>
                    <div class="my-5 row">
                        <h4>Hiring for similar work?</h4>
                        <div class="mb-4 mt-5">
                            <a href="sign_up.html" class="btn al-btn al-btn-light w-100">Post a Job Like This</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Detail Section Start -->
@endsection
