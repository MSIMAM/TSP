    {{--========= mystyles link =========--}}
    @include('layout.myStyleLinks')

    {{--=========end mystyles link =========--}}


    <div class="main-wrapper">
        {{--================ loader ===========--}}
            <div id="global-loader">
                <div class="whirly-loader"> </div>
            </div>
        {{--=========== end loader ==========--}}
        {{--============ admin header ============--}}
        @include('includes.header')
        {{--============ admin header ============--}}
        {{--=============== main sidebar ============--}}
        @include('includes.main-sidebar')
        {{--===============end main sidebar ============--}}
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Users</h4>
                        <h6>Manage Users</h6>
                    </div>

            <!-- Button trigger users modal -->
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">
                Create
            </button>

                <!--Users Create Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create New User</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.users.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="my-input">Name</label>
                                            <input id="my-input" class="form-control" placeholder="Name" type="text" name="name">
                                            @error('name')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Email</label>
                                            <input id="my-input" class="form-control" placeholder="Email" type="text" name="email">
                                            @error('email')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Password</label>
                                            <input id="my-input" class="form-control" placeholder="password" type="password" name="password">
                                            @error('password')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="my-input">Confirm Password</label>
                                            <input id="my-input" class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation">
                                            @error('password_confirmation')
                                                <span class="text-danger pt-2">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                {{--============== users lists ============--}}
                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-path">
                                    <a class="btn btn-filter" id="filter_search">
                                        <img src="{{ asset('styles/assets/img/icons/filter.svg')}}" alt="img">
                                        <span><img src="{{ asset('assets/img/icons/closes.svg')}}" alt="img"></span>
                                    </a>
                                </div>
                            <div class="search-input">
                                <a class="btn btn-searchset">
                                    <img src="{{ asset('styles/assets/img/icons/search-white.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('styles/assets/img/icons/pdf.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('styles/assets/img/icons/excel.svg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('styles/assets/img/icons/printer.svg')}}" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                        <div class="card" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter User Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Disable</option>
                                                <option>Enable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img src="{{ asset('styles/assets/img/icons/search-whites.svg')}}" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--=============== users table ==============--}}
                        <div class="table-responsive">
                            <table class="table  datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>Profile</th>
                                        <th>User name </th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td class="productimgname">
                                                <a href="javascript:void(0);" class="product-img">
                                                    <img src="{{ asset('styles/assets/img/customer/customer1.jpg')}}" alt="product">
                                                </a>
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>+12163547758 </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="status-toggle d-flex justify-content-between align-items-center">
                                                        {{-- <form action=""> --}}
                                                            <input type="checkbox" id="user1" class="check"
                                                            @if ($user->status == 'Active')
                                                                checked
                                                            @endif
                                                            >
                                                        {{-- </form> --}}
                                                        <label for="user1" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="me-3" href="" data-bs-toggle="modal" data-bs-target="#edit{{$user->uuid}}">
                                                    <img src="{{ asset('styles/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ asset('styles/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <!--Users Edit Modal -->
                                        <div class="modal fade" id="edit{{$user->uuid}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Create New User</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.status',$user->uuid)}}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="">Status</label>
                                                                    <select class="form-control" name="status" id="">
                                                                      <option name="status">{{ $user->status }}</option>
                                                                      <option name=>Active</option>
                                                                      <option name=>In Active</option>
                                                                    </select>
                                                                    {{-- <input class="form-control" type="text" value="{{ $user->status }}" name="status"> --}}
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{--===============end users table ==============--}}
                    </div>
                    </div>
            </div>
        </div>
    </div>


@include('includes.myJsLinks')
