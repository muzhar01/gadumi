@extends('admin.layout')
@section('container')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 col-md-12 order-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin_assets/unicons/chart-success.png') }}" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="{{ route('courses-index') }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Courses</span>
                                    <h3 class="card-title mb-2">{{ $course }}</h3>
                                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +72.80%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin_assets/unicons/wallet-info.png') }}" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="{{ route('lesson-index') }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Lessons</span>
                                    <h3 class="card-title mb-2">{{ $lesson }}</h3>
                                    {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +72.80%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin_assets/unicons/paypal.png') }}" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                <a class="dropdown-item" href="{{ route('exercise-index') }}">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="d-block mb-1">Exercises</span>
                                    <h3 class="card-title text-nowrap mb-2">{{ $exercise }}</h3>
                                    {{-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                        -14.82%</small> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="{{ asset('admin_assets/unicons/cc-primary.png') }}" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fw-semibold d-block mb-1">Users</span>
                                    <h3 class="card-title mb-2">0</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
@endsection
