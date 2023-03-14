@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/job.css") }}">
@endpush

@section("body")
    <!-- Find Jobs Section Start -->
    <section>
        <div class="container">
            <h2 class="text-center">Find Your Preferred Work</h2>
            <!-- Search Section Start -->
            <div class="col-sm-12 col-lg-12">
                <nav class="sidebar py-2 mt-4">
                    <div class=" px-3 pb-0 mt-3">

                        <form action="{{ url('/list-job') }}">
                            <div class="form-group">
                                <input type="search" name="job_search" class="form-control fs-5 py-3" autofocus
                                      value="{{ request()->get('job_search') }}" placeholder="Search by keywords...">
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
            <!-- Search Section End -->
            <div class="row">
                <!-- Display Jobs Section Start -->
                <div class="col-sm-12 col-lg-12 mt-4">
                    <div class="row">

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

                    <!-- ***************** -->
                        @foreach($jobs as $job)
                            <div class="col-lg-6">
                                <div class="job-section">
                                    <div class="post-bar">
                                        <div class="job_topbar">
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><h3>{{ $job->project_title }}</h3></li>
                                            </ul>
                                            <ul class="bk-links">
                                                <li><a href="{{ url('/detail-view-job/'.$job->id.'') }}" title=""
                                                       class="bid_now">See More</a></li>
                                            </ul>

                                        </div>
                                        <div class="job_descp">
                                            <ul class="job-dt">
                                                <li><span>${{ $job->min_salary }} - ${{ $job->max_salary }}</span>
                                                </li>
                                            </ul>
                                            <i class="" style="font-size: 15px;"></i><span
                                                style="font-size: 15px;color: #000000;">{{ getJobType($job->job_type) }}</span>

                                            <p>{{ substr($job->project_description,0,100) }}...</p>
                                            <ul class="skill-tags">
                                                @php
                                                    $skills = explode(',', $job->skills);
                                                @endphp

                                                @foreach($skills as $skill)
                                                    <li><a href="#" title="">{{ $skill }}</a></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    <!-- ***************** -->

                        {{-- Pagination link --}}
                        {{ $jobs->links('vendor.pagination.custom') }}
                        {{-- End Pagination link --}}

                    </div>
                </div>
                <!-- Display Jobs Section End -->

            </div>
        </div>
    </section>
    <!-- Find Jobs Section End -->
@endsection

@push('js')
    <script src="{{ asset('js/job.js') }}"></script>
@endpush
