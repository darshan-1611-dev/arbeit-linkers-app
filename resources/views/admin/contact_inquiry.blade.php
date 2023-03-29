@extends('admin.layout.main')

@section("body")
    <main>
        <div class="head-title">
            <div class="left">
                <h4 class="mb-4 ps-3">Contact inquiry</h4>
            </div>
        </div>

        <!-- Content wrapper -->
        <div>
            <!-- Content -->
            <div class="container">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Contact Us</h5>
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="datatables-users table border-top">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th style="width: 100px;">Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->message }}
                                    </td>
                                    <td style="color: #404145;">{{ $item->created_at->format('d M y') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{-- Pagination link --}}
                        {{ $data->links('vendor.pagination.simple-tailwind') }}
                        {{-- End Pagination link --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
