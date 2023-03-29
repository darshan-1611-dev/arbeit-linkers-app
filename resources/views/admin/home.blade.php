@extends('admin.layout.main')

@section("body")
    <main>
        <div class="head-title">
            <div class="left">
                <h4 class="mb-4 ps-3">Dashboard</h4>
            </div>
        </div>

        {{-- Total Numbers --}}
        <ul class="box-info">
            {{-- Total user --}}
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
						<h3>{{ $data['total_users'] }}</h3>
						<p>Total Users</p>
					</span>
            </li>
            {{-- End total user --}}
            {{-- Total jobs --}}
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
						<h3>{{ $data['total_jobs'] }}</h3>
						<p>Total Jobs</p>
					</span>
            </li>
            {{-- End total jobs--}}
            {{-- Total Transaction --}}
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
						<h3>₹{{ $data['total_transaction'] }}</h3>
						<p>Total Transactions</p>
					</span>
            </li>
            {{-- End total transaction --}}
        </ul>
        {{-- End Total Numbers --}}


        {{-- Recent Users --}}
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Users</h3>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Created at</th>
                        <th>User Type</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['recent_user'] as $item)
                        <tr>
                            <td>
                                <p>{{ $item->name }}</p>
                            </td>
                            <td>{{ $item->created_at->format('d M y') }}</td>
                            @if($item->user_type == 0)
                                <td><span class="status completed">Freelancer</span></td>
                            @else
                                <td><span class="status pending">Company</span></td>
                            @endif

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{-- End recent users --}}

{{--            <div class="todo">--}}
{{--                <div class="head">--}}
{{--                    <h3>Todos</h3>--}}
{{--                    <i class='bx bx-plus'></i>--}}
{{--                    <i class='bx bx-filter'></i>--}}
{{--                </div>--}}
{{--                <ul class="todo-list">--}}
{{--                    <li class="completed">--}}
{{--                        <p>Todo List</p>--}}
{{--                        <i class='bx bx-dots-vertical-rounded'></i>--}}
{{--                    </li>--}}
{{--                    <li class="completed">--}}
{{--                        <p>Todo List</p>--}}
{{--                        <i class='bx bx-dots-vertical-rounded'></i>--}}
{{--                    </li>--}}
{{--                    <li class="not-completed">--}}
{{--                        <p>Todo List</p>--}}
{{--                        <i class='bx bx-dots-vertical-rounded'></i>--}}
{{--                    </li>--}}
{{--                    <li class="completed">--}}
{{--                        <p>Todo List</p>--}}
{{--                        <i class='bx bx-dots-vertical-rounded'></i>--}}
{{--                    </li>--}}
{{--                    <li class="not-completed">--}}
{{--                        <p>Todo List</p>--}}
{{--                        <i class='bx bx-dots-vertical-rounded'></i>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </main>
@endsection
