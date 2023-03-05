@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/job.css") }}">
@endpush

@section("body")
    <!-- Find Jobs Section Start -->
    <section>
        <div class="container">
            <h2 class="text-center">Find Your Preferred Work</h2>
            <div class="row">

                <!-- Search Section Start -->
                <div class="col-sm-5 col-lg-3">
                    <nav class="sidebar card py-2 mt-4">
                        <div class="filter-search-box px-3 pb-0 mt-3">
                            <div class="search-sidebar_header">
                                <h4 class="ssh_heading">Search Filter</h4>
                                <a href="javascript:void(0);" class="clear_all">Clear All</a><a href="#search_open"
                                                                                                data-toggle="collapse"
                                                                                                aria-expanded="false"
                                                                                                role="button"
                                                                                                class="collapsed _filter-ico"></a>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control fs-5 py-3" placeholder="Search by keywords...">
                            </div>
                            <button type="submit" class="btn al-btn w-100 my-4">Search</button>
                        </div>
                        <ul class="nav flex-column" id="nav_accordion">
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="#"> It Computer(65) </a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">

                                            <label class="form-check-label" for="flexCheckDefault">
                                                Web Designing(20)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#">
                                            <input class="form-check-input" type="checkbox" name="radioNoLabel" value=""
                                                   aria-label="...">

                                            <label class="form-check-label" for="flexCheckDefault">
                                                Web Devlopment(10)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                App devlopment(15)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Art,Design,media(09)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Writing & Translation(11)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                SEO Service(09)
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="#"> Job Location </a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                USA
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Austrelia
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                India
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                UK
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                New Zeland
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="#"> Skills </a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Html & Css
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Python
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Java
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Adobe Photoshop
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Wordpress or shopify
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Php
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="#">Experience</a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Beginner(54)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                1+ Year (32)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                2+ Year (09)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                3+ Year (16)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                5+ Year (18)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                10+ Year (28)
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-submenu">
                                <a class="nav-link" href="#"> Job Type </a>
                                <ul class="submenu collapse">
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Full Time(18)
                                            </label>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Part Time(10)
                                            </label>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="nav-link" href="#"><input class="form-check-input" type="checkbox"
                                                                            name="radioNoLabel" value=""
                                                                            aria-label="...">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Contract Base(22)
                                            </label>
                                        </a>
                                    </li>
                                </ul>
                                <div class="px-3">
                                    <button type="submit" class="btn al-btn w-100 my-4">Find Job</button>
                                </div>
                            </li>


                        </ul>
                    </nav>
                </div>
                <!-- Search Section End -->


                <!-- Display Jobs Section Start -->
                <div class="col-sm-7 col-lg-9 mt-4">
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
                                                <li><a href="{{ url('/detail-view-job/'.$job->id.'') }}" title="" class="bid_now">See More</a></li>
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
