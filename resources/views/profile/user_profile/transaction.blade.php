@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">

    @include('profile.user_profile.sidebar')
    <!-- Main Section Start -->
        <div class="home">
            <section class="container">
                <div>
                    <h2>Your All Transaction</h2>
                    <h3>Total balance : <span style="color: green">₹{{ auth()->user()->revenue }}</span></h3>
                </div>

                {{-- Table start --}}
                <div class="data-table">
                    <table class="table table-responsive-lg table-bordered" style="overflow: hidden;">
                        <thead class="table-light">
                        <tr class="fs-4">
                            <th scope="col">Id</th>
                            <th scope="col">Payment Id</th>
                            <th scope="col">Project Detail</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Payment Amount</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Payment Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payment_detail as $item)
                            <tr class="fs-4">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->payment_id }}</td>
                                <td>
                                    <a href="{{ url('detail-view-job/'.$item->job_detail->id.'') }}">{{ $item->job_detail->project_title }}</a>
                                </td>
                                <td>
                                    <a href="{{ url('company/'.$item->company_detail->user_id.'') }}">{{ $item->company_detail->company_name }}</a>
                                </td>
                                <td>₹{{ $item->amount }}</td>
                                <td><span class="btn btn-success">Credited</span></td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
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
