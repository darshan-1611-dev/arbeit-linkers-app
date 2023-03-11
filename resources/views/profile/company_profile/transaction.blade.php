@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">

    @include('profile.company_profile.sidebar')
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
                            <th scope="col">User Detail</th>
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
                                <td>{{ $item->job_detail->project_title }}</td>
                                <td>{{ $item->user_detail->name }}</td>
                                <td>₹{{ $item->amount }}</td>
                                <td><span class="btn btn-danger">Debited</span>  </td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Table End --}}

            </section>
        </div>
    </div>
@endsection

@push('js')

    <script src="{{ asset("js/sidebar.js") }}"></script>

@endpush
