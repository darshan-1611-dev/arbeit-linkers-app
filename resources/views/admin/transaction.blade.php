@extends('admin.layout.main')

@push('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section("body")
    <main>
        <div class="head-title">
            <div class="left">
                <h4 class="mb-4 ps-3">Payment Overview</h4>
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
                  <h3>{{ $total_transaction_count }}</h3>
                  <p>Total Transaction</p>
                </span>
                        </li>
                        <li>
                            <i class='bx bxs-group'></i>
                            <span class="text">
                  <h3>₹{{ $total_amount }}</h3>
                  <p>Total Value</p>
                </span>
                        </li>
                        <li>
                            <i class='bx bxs-user-account'></i>
                            <span class="text">
                  <h3>Nil</h3>
                  <p>Total Earning</p>
                </span>
                        </li>
                    </ul>
                </div>
                {{-- End Overview --}}

                {{-- Transaction Table --}}
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0">Transaction's List</h5>
                    </div>
                    <div class="card-datatable table-responsive">
                        <table class="datatables-users table border-top transaction_datatable">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Sender Name</th>
                                <th>Receiver Name</th>
                                <th>Job Detail</th>
                                <th>Payment Id</th>
                                <th>Amount</th>
                                <th>Payment At</th>
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
            var table = $('.transaction_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('dashboard/transactions-datatable-data') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'sender_name', name: 'sender_name'},
                    {data: 'receiver_name', name: 'receiver_name'},
                    {data: 'job_details', name: 'job_details'},
                    {data: 'payment_id', name: 'payment_id'},
                    {data: 'amount', name: 'amount'},
                    {data: 'created_at', name: 'created_at'},
                ]
            });
        });
    </script>
@endpush
