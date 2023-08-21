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
                        <h4>Programme List</h4>
                        <h6>Manage Programme</h6>
                    </div>
                    @can('Programme Create')
                        <div class="page-btn">
                            <a href="adduser.html" class="btn btn-added" data-bs-toggle="modal"
                                data-bs-target="#addProgramme"><img src="{{ asset('styles/assets/img/icons/plus.svg') }}"
                                    alt="img" class="me-2">Add Programme
                            </a>
                        </div>
                    @endcan
                </div>

                <!--=================================Create Programme Modal  =======================-->
                <div class="modal fade" id="addProgramme" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Programme</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('programe.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="my-input">Name</label>
                                        <input id="my-input" class="form-control" type="text" name="name"
                                            placeholder="Name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Schollar</label>
                                        <select class="form-control" name="schollar_uuid" id="">
                                            @foreach ($schollars as $schollar)
                                                <option value="{{ $schollar->uuid }}">{{ $schollar->schollar_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--=================================end Create Programme Modal  =======================-->
                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-input">
                                    <a class="btn btn-searchset">
                                        <img src="{{ asset('styles/assets/img/icons/search-white.svg') }}"
                                            alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="wordset">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                                src="{{ asset('styles/assets/img/icons/pdf.svg') }}" alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                                src="{{ asset('styles/assets/img/icons/excel.svg') }}"
                                                alt="img"></a>
                                    </li>
                                    <li>
                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                                src="{{ asset('styles/assets/img/icons/printer.svg') }}"
                                                alt="img"></a>
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
                                        <th>Programme Name</th>
                                        <th>Schollar Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programes as $programe)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td class="">
                                                {{ $programe->name }}
                                            </td>
                                            <td class="">
                                                {{ $programe->schollar_name}}
                                            </td>
                                            <td>
                                                <a class="me-3" href="edituser.html" data-bs-toggle="modal" data-bs-target="#editProgramme{{$programe->uuid, $schollar->uuid}}">
                                                    <img src="{{ asset('styles/assets/img/icons/edit.svg') }}"
                                                        alt="img">
                                                </a>
                                                <form action="{{ route('programe.delete', $programe->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit">save</button>
                                                </form>
                                                <a class="me-3 confirm-text" href="{{ route('programe.delete', $programe->uuid) }}">
                                                    <img src="{{ asset('styles/assets/img/icons/delete.svg') }}"
                                                        alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <!--=================================Edit Programme Modal  =======================-->
                                        <div class="modal fade" id="editProgramme{{$programe->uuid, $schollar->uuid}}" tabindex="-1" role="dialog"
                                            aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Programme</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('programe.update', $programe->uuid) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="my-input">Name</label>
                                                                <input id="my-input" class="form-control"
                                                                    type="text" name="name" placeholder="Name" value="{{ $programe->name }}">
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Schollar</label>
                                                                <select class="form-control" name="schollar_uuid"
                                                                    id="">
                                                                    @foreach ($schollars as $schollar)
                                                                        <option value="{{ $schollar->uuid }}">
                                                                            {{ $schollar->schollar_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
