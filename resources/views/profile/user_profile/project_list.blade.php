@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">

        {{-- Sidebar --}}
        @include('profile.user_profile.sidebar')
        {{-- End sidebar --}}

        <div class="home">
            <!-- Main Content Start -->

            @php

                function check_payment_status($bid)
                {
                    $status = null;


                    if($bid == 0){
                        $status = "<button type='button' class='btn btn-warning'>Pending </button>";
                    }

                     if($bid == 1){
                        $status = "<button type='button' class='btn btn-success'>Success </button>";
                    }

                     if($bid == 2){
                        $status = "<button type='button' class='btn btn-danger'> Cancelled </button>";
                    }

                    return $status;
                }
            @endphp

            <section class="container">
                <div>
                    <h2>Your All Projects</h2>
                </div>
                <div class="filters mb-5 d-flex justify-content-between align-items-center">
                    <h5 class="">Filters: </h5>
                    <div class="">
                        <form action="" method="post" class="row">
                            <div class="col-8">
                                <select name="search" id="" class="form-select fs-4 py-3">
                                    <option value="" selected>Select Bids type</option>
                                    <option value="Total Projects">Total Bids</option>
                                    <option value="Ongoing Projects">Pendding Bids</option>
                                    <option value="Completed Projects">Approved Bids</option>
                                    <option value="Completed Projects">Rejected Bids</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn al-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>


                {{-- Table start --}}
                <div class="data-table">
                    <table class="table table-responsive-lg table-bordered" style="overflow: hidden;">
                        <thead class="table-light">
                        <tr class="fs-4">
                            <th scope="col">Id</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Job Created at</th>
                            <th scope="col">Job Price</th>
                            <th scope="col">Job Duration</th>
                            <th scope="col">Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="fs-4">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->project_title }}</td>
                                <td>{{ $item->user_details->company_name }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{{ $item->bid_details->price }}</td>
                                <td>{{ $item->bid_details->time_duration }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
{{--                                <td>{!!  check_bid_status($item->bid_status)  !!}</td>--}}
{{--                                <td><a href="{{ url('/detail-view-job/'. $item->job_id .'') }}" class="text-primary">Project Details</a>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Table End --}}

            </section>

            <!-- Main Content End -->
        </div>

    </div>
@endsection


@push('js')

    <script src="{{ asset("js/sidebar.js") }}"></script>

@endpush
