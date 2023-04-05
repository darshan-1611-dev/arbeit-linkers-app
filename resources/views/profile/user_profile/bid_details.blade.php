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

                function check_bid_status($bid)
                {
                    $status = null;


                    if($bid == 0){
                        $status = "<button type='button' class='btn btn-warning'>Pending </button>";
                    }

                     if($bid == 1){
                        $status = "<button type='button' class='btn btn-success'>Approved </button>";
                    }

                     if($bid == 2){
                        $status = "<button type='button' class='btn btn-danger'> Rejected </button>";
                    }

                    return $status;
                }
            @endphp

            <section class="container">
                <div>
                    <h2>Your All Bids</h2>
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


                <div class="data-table">
                    <table class="table table-responsive-lg table-bordered" style="overflow: hidden;">
                        <thead class="table-light">
                        <tr class="fs-4">
                            <th scope="col">Project Id</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Bidding Price</th>
                            <th scope="col">Time Duration</th>
                            <th scope="col">Bidding Date</th>
                            <th scope="col">Bidding Status</th>
                            <th scope="col">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="fs-4">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->job_detail->project_title }}</td>
                                <td>₹{{ $item->price }}</td>
                                <td>{{ $item->time_duration }}</td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{!!  check_bid_status($item->bid_status)  !!}</td>
                                <td><a href="{{ url('/detail-view-job/'. $item->job_id .'') }}" class="text-primary">Project Details</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </section>

            <!-- Main Content End -->
        </div>

    </div>
@endsection


@push('js')

    <script src="{{ asset("js/sidebar.js") }}"></script>

@endpush
