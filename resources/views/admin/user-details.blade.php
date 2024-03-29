@extends('admin.layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css?v=3.2.0') }}">
@endpush

@section("body")
    <main>

        @if($user_details->user_type == 0)
            {{-- Freelancer Profile --}}
            <div class="row">
                <div class="col-md-3">

                    {{-- Basic Information --}}
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @php
                                    $profile_picture = isset($user_details->user_detail->profile_photo_path) ? "storage/" . $user_details->user_detail->profile_photo_path : 'images/user_icon.jpeg';
                                @endphp
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{ asset($profile_picture)  }}"
                                     alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ $user_details->name }}</h3>
                            <p class="text-muted text-center">{{ $user_details->user_detail->user_title }}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Hourly Rate</b> <a
                                        class="float-right">{{ $user_details->user_detail->hourly_rate }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Revenue</b> <a class="float-right">₹{{ $user_details->revenue }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Projects</b> <a class="float-right">{{ $projects->count() }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- End Basic Information --}}

                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>

                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            <p class="text-muted">
                                {{ $user_details->user_detail->is_education == 1
                                ? ''.$user_details->user_detail->degree_title.' from '.$user_details->user_detail->school_name.''
                                : 'Nil' }}
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted">{{ $user_details->user_detail->city }}
                                , {{ $user_details->user_detail->country }}</p>
                            <hr>
                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                            <p class="text-muted">
                                {{ $user_details->user_detail->skills ?? 'Nil' }}
                            </p>
                            <hr>
                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                            <p class="text-muted">{{ $user_details->user_detail->user_description ?? 'None'}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active"
                                                        data-toggle="tab">Details</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                {{--  Content of activity tab --}}
                                <div class="active tab-pane" id="activity">

                                    {{-- experience --}}
                                    <h5 class="text-uppercase bg-secondary p-2 mt-3 mb-3"
                                        style="background-color: #f7fafc !important;color: black !important;">
                                        Experience</h5>
                                    <br>
                                    @if($user_details->user_detail->is_experience == 1)
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th scope="row">Job Title</th>
                                                <td>{{ $user_details->user_detail->job_title }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Company</th>
                                                <td>{{ $user_details->user_detail->job_company }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Country</th>
                                                <td>{{ $user_details->user_detail->job_country }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">From Date</th>
                                                <td>{{ $user_details->user_detail->job_start_date }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">To</th>
                                                <td>{{ $user_details->user_detail->is_working == 1 ? 'Present' : $user_details->user_detail->job_end_date }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    @else
                                        <p>No Data Found</p>
                                    @endif
                                    {{-- end experience --}}

                                    <hr>

                                    {{-- Projects --}}
                                    <h5 class="text-uppercase bg-secondary p-2 mt-3 mb-3"
                                        style="background-color: #f7fafc !important;color: black !important;">Projects
                                        And
                                        Payments</h5>
                                    <br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Project Title</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Payment Id</th>
                                            <th scope="col">Created At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($projects as $project)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
{{--                                                <td>--}}
{{--                                                    <a href="{{ url('/detail-view-job/'.$project->id.'') }}">{{ $project->project_title }}</a>--}}
{{--                                                </td>--}}
                                                <td>{{ $project->project_title }}</td>
                                                <td>{!!  $project->payment_status == 1 ? "<span class='badge badge-success'>Received</span>" : "<span class='badge badge-danger'>Not Received</span>" !!}</td>
                                                <td>{{ $project->payment_status == 1 ? '₹'.$project->payments->amount : 'Nil' }}</td>
                                                <td>{{ $project->payment_status == 1 ? $project->payments->payment_id : 'Nil' }}</td>
                                                <td>{{ $project->created_at->format('d M Y') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{-- End projects --}}
                                </div>
                                {{--  End content of activity tab --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Freelancer Profile --}}
        @else
            {{-- Comapny Profile --}}
            <div class="row">
                <div class="col-md-3">

                    {{-- Basic Information --}}
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @php
                                    $profile_picture = isset($user_details->user_detail->profile_photo_path) ? "storage/" . $user_details->user_detail->profile_photo_path : 'images/user_icon.jpeg';
                                @endphp
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{ asset($profile_picture)  }}"
                                     alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ $user_details->name }}</h3>
                            <p class="text-muted text-center">{{ $user_details->user_detail->company_name }}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Transaction</b> <a class="float-right">₹{{ $company_transaction_amount }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Projects</b> <a class="float-right">{{ $company_projects->total() }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Country</b> <a
                                        class="float-right">{{ $user_details->user_detail->country }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- End Basic Information --}}
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active"
                                                        data-toggle="tab">Details</a>
                                </li>
                            </ul>
                        </div>

                        {{-- Company and Project Information --}}
                        <div class="card-body">
                            <div class="tab-content">
                                {{--  Content of activity tab --}}
                                <div class="active tab-pane" id="activity">

                                    {{-- Comapny Details --}}
                                    <h5 class="text-uppercase bg-secondary p-2 mt-3 mb-3"
                                        style="background-color: #f7fafc !important;color: black !important;">
                                        Experience</h5>
                                    <br>

                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th scope="row">Company Name</th>
                                            <td>{{ $user_details->user_detail->company_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Company Description</th>
                                            <td>{{ $user_details->user_detail->company_description }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Comapny Details --}}

                                    <hr>

                                    {{-- Projects And Payments --}}
                                    <h5 class="text-uppercase bg-secondary p-2 mt-3 mb-3"
                                        style="background-color: #f7fafc !important;color: black !important;">Projects
                                        And
                                        Payments</h5>
                                    <br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Project Title</th>
                                            <th scope="col">To User</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Payment Id</th>
                                            <th scope="col">Created At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($company_projects as $project)
                                            <tr>
                                                <th scope="row">{{ ($company_projects->currentpage()-1) * $company_projects->perpage() + $loop->index + 1 }}</th>
{{--                                                <td>--}}
{{--                                                    <a href="{{ url('/detail-view-job/'.$project->id.'') }}">{{ $project->project_title }}</a>--}}
{{--                                                </td>--}}
                                                <td>{{ $project->project_title }}</td>
                                                <td>{!! $project->payment_status == 1 ? '<a href="'. url('dashboard/user-details/'.$project->payments->receiver_id.'').'">view more</a>'  : 'Nil' !!}</td>
                                                <td>{!! $project->payment_status == 1 ? "<span class='badge badge-success'>Sent</span>" : "<span class='badge badge-danger'>Not Sent</span>" !!}</td>
                                                <td>{{ $project->payment_status == 1 ? '₹'.$project->payments->amount : 'Nil' }}</td>
                                                <td>{{ $project->payment_status == 1 ? $project->payments->payment_id : 'Nil' }}</td>
                                                <td>{{ $project->created_at->format('d M Y') }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    {{-- Pagination link --}}
                                    {{ $company_projects->links('vendor.pagination.simple-tailwind') }}
                                    {{-- End Pagination link --}}
                                    {{-- End Projects And Payments --}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- End Company and Project Information --}}
            </div>
            {{-- End Company Profile --}}
        @endif
    </main>
@endsection

@push('js')
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/adminlte.min.js?v=3.2.0') }}"></script>

@endpush
