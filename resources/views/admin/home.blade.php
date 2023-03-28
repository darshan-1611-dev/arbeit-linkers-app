@extends('admin.layout.main')

@section("body")
    <div>
        <!-- Statistics Cards -->
        <div class="row">
            <div class="col-6 col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-current-location fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap">Total Visites</span>
                        <h2 class="mb-0">6500</h2>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cabinet fs-4"></i></span>
                        </div>
                        <span class="d-block text-nowrap">Trending Job</span>
                        <h6 class="mb-0">Web Development</h6>
                        <h3>500</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                          <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-user-plus fs-4"></i
                              ></span>
                        </div>
                        <span class="d-block text-nowrap">Top Client</span>
                        <h6 class="mb-0">Avadh Rakholiya</h6>
                        <h3>500</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="avatar mx-auto mb-2">
                          <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-user fs-4"></i
                              ></span>
                        </div>
                        <span class="d-block text-nowrap">Top Freelancer</span>
                        <h6 class="mb-0">Gautam Savsaviya</h6>
                        <h3>500</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Cards -->
    </div>
    <div class="row">
        <!-- Referral, conversion, impression & income charts -->
        <div class="col-lg-3 col-md-12">
            <!-- Growth Chart-->
            <div class="row h-100">
                <div class="col-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                    <span
                                        class="avatar-initial bg-label-primary rounded-circle"
                                    ><i class='bx bx-credit-card'></i></span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            $38,566
                                        </h5>
                                        <small class="text-muted">Total Transaction</small>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="conversationChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="avatar">
                                    <span
                                        class="avatar-initial bg-label-warning rounded-circle"
                                    ><i class="bx bx-dollar fs-4"></i
                                        ></span>
                                    </div>
                                    <div class="card-info">
                                        <h5 class="card-title mb-0 me-2">
                                            $53,659
                                        </h5>
                                        <small class="text-muted">Total Income</small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Referral, conversion, impression & income charts -->

        <!-- Activity -->
        <!-- Latest Update -->
        <div class="col-md-6 col-lg-6 col-xl-4 col-xl-4 mb-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title mb-0">Latest Update</h5>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4">
                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                              <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-user fs-4"></i
                                  ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <p class="mb-0 lh-1">Total Registration</p>
                                </div>
                                <div class="item-progress">10k</div>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-pie-chart-alt'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <p class="mb-0 lh-1">Total Projects</p>
                                </div>
                                <div class="item-progress">26M</div>
                            </div>
                        </li>
                        <li class="d-flex mb-4">
                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-credit-card'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <p class="mb-0 lh-1">Total Bids</p>
                                </div>
                                <div class="item-progress">15M</div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar avatar-sm flex-shrink-0 me-3">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-dollar'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <p class="mb-0 lh-1">Total Accepted Bids</p>
                                </div>
                                <div class="item-progress">2B</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Latest Update -->
        <!--/ Activity -->

        <!-- Profit Report & Registration -->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-5">
            <div class="col-12 col-sm-6 col-md-12 mb-4">
                <div class="card">
                    <div class="card-header pb-2">
                        <h5 class="card-title mb-0">Registration</h5>
                    </div>
                    <div class="card-body pb-2">
                        <div
                            class="d-flex justify-content-between align-items-end gap-3"
                        >
                            <div class="mb-3">
                                <div class="d-flex align-content-center">
                                    <h5 class="mb-1">58.4k</h5>
                                    <i class="bx bx-chevron-up text-success"></i>
                                </div>
                                <small class="text-success">12.8%</small>
                            </div>
                            <div id="registrationsBarChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Profit Report & Registration -->

    </div>
    <!-- / Content -->
@endsection
