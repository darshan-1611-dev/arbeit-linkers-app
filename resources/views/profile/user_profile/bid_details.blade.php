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

                function check_bid_status($bid, $job_active)
                {
                    $status = null;

                    if ($job_active != null){
                        return "<button type='button' title='Job Deleted By Company' class='btn btn-danger'> Job Deleted </button>";
                    }

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
                            <th scope="col">Action</th>
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
                                <td>{!!  check_bid_status($item->bid_status, $item->job_detail->deleted_at)  !!}</td>
                                @if($item->job_detail->deleted_at == null)
                                    <td><a href="{{ url('/detail-view-job/'. $item->job_id .'') }}"
                                           class="text-primary">Project
                                            Details</a>
                                    </td>
                                @else
                                    <td></td>
                                @endif

                                @if($item->bid_status == 0 && $item->job_detail->deleted_at == null)
                                    <td><a href="{{ url('/retract-bid-job/'. $item->id .'') }}"
                                           class="btn btn-danger">Retract Bid</a></td> @else
                                    <td></td>@endif


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
