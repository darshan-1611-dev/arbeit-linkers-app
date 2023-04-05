@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">

    @include('profile.company_profile.sidebar')
    <!-- Main Section Start -->
        <div class="home">

        @php

            function check_project_status($bid)
            {
                $status = null;


                if($bid == 0){
                    $status = "<button type='button' class='btn btn-warning'>Pending </button>";
                } else {
                    $status = "<a href=". url('user/'.$bid.'')." title='tap to view assigned user detail'><button type='button' class='btn btn-success'>Assigned</button></a>";
                }

                return $status;
            }

        @endphp

        <!-- Main Content Start -->
            <section class="container" style="margin: auto;">
                <div>
                    <div>
                        <h2>Project Name</h2>
                    </div>

                    <div class="data-table">
                        <table class="table table-responsive-lg table-bordered" style="overflow: hidden;">
                            <thead class="table-light">
                            <tr class="fs-4">
                                <th scope="col">Project Id</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Price Range</th>
                                <th scope="col">Time Duration(In week)</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Project Status</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Detail</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Job_detail as $item)
                                <tr class="fs-4">
                                    <th scope="row">#00{{ $item->id }}</th>
                                    <td>
                                        <a href="{{ url('detail-view-job/'.$item->id .'') }}">{{ $item->project_title }}</a>
                                    </td>
                                    <td>${{ $item->min_salary }} - ${{ $item->max_salary }}</td>
                                    <td>{{ $item->job_duration }}</td>
                                    <td>{{ $item->created_at->format('d M Y') }}</td>
                                    <td>{!!  check_project_status($item->is_bid_done)  !!}</td>
                                    <td> @if($item->payment_status == 0 && $item->is_bid_done != 0)
                                            @include('payment_view',[ "amount" => ($item->bid_details->price * 100) ,
                                            "payment_text" => "pay now",
                                            "job_id" => $item->bid_details->job_id,
                                            "receiver_id" => $item->is_bid_done])
                                        @elseif($item->payment_status == 1)
                                            <span class="text-center">Payment Done!</span>
                                        @else
                                            <span class="text-center">Nil</span>
                                        @endif</td>
                                    <td><a href="{{ url('/company-profile/project/bid-detail/'. $item->id .'') }}"
                                           class="text-primary">Bid Details</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->
        </div>
        <!-- Main Section End -->
    </div>
@endsection

@push('js')
    <script src="{{ asset("js/sidebar.js") }}"></script>
@endpush
