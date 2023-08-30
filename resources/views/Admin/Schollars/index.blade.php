    {{-- ========= mystyles link ========= --}}
    @include('layout.myStyleLinks')

    {{-- =========end mystyles link ========= --}}


    <div class="main-wrapper">
        {{-- ================ loader =========== --}}
        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div>
        {{-- =========== end loader ========== --}}
        {{-- ============ admin header ============ --}}
        @include('includes.header')
        {{-- ============ admin header ============ --}}
        {{-- =============== main sidebar ============ --}}
        @include('includes.main-sidebar')
        {{-- ===============end main sidebar ============ --}}
        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Schollars List</h4>
                        <h6>Manage Schollars</h6>
                    </div>
                    @can('Schollar create')
                        <div class="page-btn">
                            <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addSchollar"><img src="{{ asset('styles/assets/img/icons/plus.svg') }}" alt="img"
                                    class="me-2">Add Schollar
                            </a>
                        </div>
                    @endcan
                </div>

                <!--=================================Add Schollar Modal  =======================-->
                <div class="modal fade" id="addSchollar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Schollar</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('schollar.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="my-input">Name</label>
                                        <input id="my-input" class="form-control" type="text" name="schollar_name" placeholder="Name">
                                        @error('schollar_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================End Schollar Modal  =======================-->
                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-input">
                                    <a class="btn btn-searchset">
                                        <img src="{{ asset('styles/assets/img/icons/search-white.svg') }}" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                                src="{{ asset('styles/assets/img/icons/pdf.svg')}}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                                src="{{ asset('styles/assets/img/icons/excel.svg')}}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                                src="{{ asset('styles/assets/img/icons/printer.svg')}}" alt="img"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                                        <th>Schollar Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schollars as $key => $schollar)
                                    <tr>
                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td class="">
                                            {{ $schollar->schollar_name }}
                                        </td>
                                        <td>
                                            @can('Schollar edit')
                                                <a class="me-3" href="edituser.html" data-bs-toggle="modal" data-bs-target="#editSchollar{{ $schollar->uuid }}">
                                                    <img src="{{ asset('styles/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                            @endcan
                                            @can('Schollar delete')
                                                <a class="me-3 confirm-text" href="{{ route('schollar.delete', $schollar->id) }}">
                                                    <img src="{{ asset('styles/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>

                                    <!--=================================Add Schollar Modal  =======================-->
                                    <div class="modal fade" id="editSchollar{{ $schollar->uuid }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Schollar</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('schollar.update', $schollar->uuid) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="my-input">Name</label>
                                                            <input id="my-input" class="form-control" type="text" value="{{ $schollar->schollar_name }}" name="schollar_name" placeholder="Name">
                                                            @error('schollar_name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--=================================End Schollar Modal  =======================-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('includes.myJsLinks')
