@include('layout.myStyleLinks')

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

    @include('includes.header')

    @include('includes.main-sidebar')
    @include('toastr')
    <div class="page-wrapper">
        <div class="content">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="dash-count">
                        <div class="dash-counts">
                            <h4><span class="counters" data-count="{{ $count_users }}"></span></h4>
                            <h5>Users</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="dash-count das1">
                        <div class="dash-counts">
                            <h4><span class="counters" data-count="{{ $count_roles }}"></span></h4>
                            <h5>Roles</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 d-flex">
                    <div class="dash-count das2">
                        <div class="dash-counts">
                            <h4><span class="counters" data-count="{{ $count_permissions }}"></span></h4>
                            <h5>Permissions</h5>
                        </div>
                        <div class="dash-imgs">
                            <i data-feather="settings"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Lectures & Reviews</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Lectures</span>
                                        </li>
                                        <li>
                                            <span>Reviews</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2023 <img src="{{ asset('styles/assets/img/icons/dropdown.svg') }}"
                                                alt="img" class="ms-2">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.myJsLinks')
