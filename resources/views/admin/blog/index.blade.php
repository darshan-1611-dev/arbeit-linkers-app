@extends('admin.layout.main')

@push('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section("body")
    <main>
        <div class="head-title">
            <div class="left">
                <h4 class="mb-4 ps-3">Blogs</h4>
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
                  <h3>{{ $total_blogs_count }}</h3>
                  <p>Total Blogs</p>
                </span>
                        </li>
                        <li>
                            <i class='bx bxs-group'></i>
                            <span class="text">
                  <h3>{{ $total_blogs_views }}</h3>
                  <p>Total Views</p>
                </span>
                        </li>
                        <li>
                            <i class='bx bxs-user-account'></i>
                            <span class="text">
                  <h3>{{ $total_active_blogs_count }}</h3>
                  <p>Total Active Blogs</p>
                </span>
                        </li>
                    </ul>
                </div>
                {{-- End Overview --}}

                {{-- Blog Table --}}
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0">Blog's List</h5>
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="datatables-users table border-top transaction_datatable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Blog Title</th>
                                <th>Slug</th>
                                <th>Total Views</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                {{-- End Blog Table --}}
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
            var table = $('.transaction_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('dashboard/blogs-datatable-data') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'blog_title', name: 'blog_title'},
                    {data: 'slug', name: 'slug'},
                    {data: 'views', name: 'views'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action'},
                ]
            });
        });
    </script>
@endpush
