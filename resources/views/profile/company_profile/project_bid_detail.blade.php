@extends('layout.main')

@push('css')
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">
@endpush

@section("body")
    <div class="d-flex">

        @include('profile.company_profile.sidebar')

        <div class="home">

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
                                <th scope="col">Id</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Time Duration(In week)</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr class="fs-4">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->user_detail->name }}</td>
                                    <td>${{ $item->price }}</td>
                                    <td>{{ $item->time_duration }}</td>
                                    <td title="{{ $item->description }}">{{ substr($item->description,0,10) }}...</td>
                                    <td>{{ $item->created_at->format('d M Y') }}</td>
                                    <td><a href="{{ url('/company-profile/project/bid/assign/'. $item->user_detail->id .'/'. $item->job_detail->id.'') }}"
                                           class="btn btn-success">Approve</a>
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
    </div>
@endsection

@push('js')
    <script src="{{ asset("js/sidebar.js") }}"></script>
@endpush
