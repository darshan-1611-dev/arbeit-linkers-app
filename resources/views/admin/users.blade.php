@extends('admin.layout.main')

@push('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section("body")
    <main>
        <div class="head-title">
            <div class="left">
                <h4 class="mb-4 ps-3">Dashboard</h4>
            </div>

        </div>

        <div>
            <div class="container">
                {{-- Overview --}}
                <div class="row g-4 mb-4">
                    <ul class="box-info">
                        <li>
                            <i class='bx bxs-user'></i>
                            <span class="text">
                  <h3>{{ $total_users }}</h3>
                  <p>Total User</p>
                </span>
                        </li>
                        <li>
                            <i class='bx bxs-group'></i>
                            <span class="text">
                  <h3>{{ $total_client }}</h3>
                  <p>Total Client</p>
                </span>
                        </li>
                        <li>
                            <i class='bx bxs-user-account'></i>
                            <span class="text">
                  <h3>{{ $total_freelancer }}</h3>
                  <p>Total Freelancer</p>
                </span>
                        </li>
                    </ul>
                </div>
                {{-- End Overview --}}

                {{-- User Table --}}
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0">User's List</h5>
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="datatables-users table border-top user_datatable">
                            <thead>
                            <tr>
                                <th>Sno</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                {{-- End User Table --}}
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var table = $('.user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('dashboard/users-datatable-list') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'user_type', name: 'user_type'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endpush
