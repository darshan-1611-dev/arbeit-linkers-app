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
                        $status = "<button type='button' class='btn btn-success'>Done </button>";
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
                            <th scope="col">Job Duration(in weeks)</th>
                            <th scope="col">Payment Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="fs-4">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="{{ url('detail-view-job/'.$item->id.'') }}">{{ $item->project_title }}</a></td>
                                <td>
                                    <a href="{{ url('company/'.$item->user_details->user_id.'') }}">{{ $item->user_details->company_name }}</a>
                                </td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{{ $item->bid_details->price }}</td>
                                <td>{{ $item->bid_details->time_duration }}</td>
                                <td>{!!  check_payment_status($item->payment_status)  !!}</td>
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
