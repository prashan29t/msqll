<!-- resources/views/welcome.blade.php -->

@extends('layouts/layout')

@section('title', 'Welcome')

@section('content')
    
<!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Customer Ratings -->
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Customer Ratings</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="customerRatings"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customerRatings">
                          <a class="dropdown-item" href="javascript:void(0);">Featured Ratings</a>
                          <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
                          <a class="dropdown-item" href="javascript:void(0);">See All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-0">
                      <div class="d-flex align-items-center gap-3 mb-3">
                        <h1 class="display-3 mb-0">4.0</h1>
                        <div class="ratings">
                          <i class="bx bxs-star bx-sm text-warning"></i>
                          <i class="bx bxs-star bx-sm text-warning"></i>
                          <i class="bx bxs-star bx-sm text-warning"></i>
                          <i class="bx bxs-star bx-sm text-warning"></i>
                          <i class="bx bxs-star bx-sm text-lighter"></i>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="badge bg-label-primary me-3">+5.0</span>
                        <span>Points from last month</span>
                      </div>
                    </div>
                    <div id="customerRatingsChart"></div>
                  </div>
                </div>
                <!--/ Customer Ratings -->
                <!-- Overview & Sales Activity -->
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <h5 class="card-title mb-0">Overview & Sales Activity</h5>
                      <small class="card-subtitle">Check out each column for more details</small>
                    </div>
                    <div id="salesActivityChart"></div>
                  </div>
                </div>
                <!--/ Overview & Sales Activity -->
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-6 mb-4">
                      <div class="card">
                        <div class="card-body pb-0">
                          <span class="d-block fw-medium mb-1">Sessions</span>
                          <h3 class="card-title mb-2">2,845</h3>
                        </div>
                        <div id="sessionsChart" class="mb-3"></div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                              <img src="../../assets/img/icons/unicons/cube-secondary.png" alt="cube" class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt2"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt2">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                              </div>
                            </div>
                          </div>
                          <span class="fw-medium d-block mb-1">Order</span>
                          <h4 class="card-title mb-2">$1,286</h4>
                          <small class="text-danger fw-medium"><i class="bx bx-down-arrow-alt"></i> -13.24%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column">
                              <div class="card-title mb-auto">
                                <h5 class="mb-0">Generated Leads</h5>
                                <small>Monthly Report</small>
                              </div>
                              <div class="chart-statistics">
                                <h3 class="card-title mb-1">4,230</h3>
                                <small class="text-success text-nowrap fw-medium"
                                  ><i class="bx bx-up-arrow-alt"></i> +12.8%</small
                                >
                              </div>
                            </div>
                            <div id="leadsReportChart"></div>
                          </div>
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
