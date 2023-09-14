@include('layout.myStyleLinks')


<div class="main-wrapper">
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    @include('includes.header')

    @include('includes.main-sidebar')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Roles</h4>
                    <h6>Manage Roles</h6>
                </div>
                <div class="page-btn">
                    @can('Role create')
                        <a class="btn btn-added" href="#" data-bs-toggle="modal" data-bs-target="#create_role"><img
                                src="{{ asset('styles/assets/img/icons/plus.svg') }}" alt="img" class="me-1">Add
                            Roles</a>
                    @endcan
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a class="btn btn-searchset"><img
                                        src="{{ asset('styles/assets/img/icons/search-white.svg') }}"
                                        alt="img"></a>
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
                                            src="{{ asset('styles/assets/img/icons/excel.svg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="{{ asset('styles/assets/img/icons/printer.svg') }}" alt="img"></a>
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
                                            <span class="checkmarks" id="selectall"></span>
                                        </label>
                                    </th>
                                    <th>Role</th>
                                    <th>description</th>
                                    <th>permission</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('Role access')
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $role->name }}</td>
                                            <td>Owner</td>
                                            <td>
                                                <div class="d-block justify-content-space-between align-items-center">
                                                    @foreach ($role->permissions as $permission)
                                                        <span
                                                            class="bg-secondary text-light rounded p-1">{{ $permission->name }}</span>
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badges bg-lightgreen">Active</span>
                                            </td>
                                            <td class="text-end">
                                                @can('Role edit')
                                                    <a class="me-3" data-bs-target="#edit_role{{ $role->id }}"
                                                        data-bs-toggle="modal">
                                                        <img src="{{ asset('styles/assets/img/icons/edit.svg') }}"
                                                            alt="img">
                                                    </a>
                                                @endcan
                                                @can('Role delete')
                                                    <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="me-3" class="btn btn-success">
                                                            <img src="{{ asset('styles/assets/img/icons/delete.svg') }}"
                                                                alt="img">
                                                        </button>
                                                    </form>
                                                @endcan

                                            </td>
                                        </tr>
                                        {{-- role edit modal --}}
                                        <div id="edit_role{{ $role->id }}" class="modal custom-modal fade"
                                            role="dialog">
                                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Role</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.roles.update', $role->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Role Name <span
                                                                                class="text-danger">*</span></label>
                                                                        <input class="form-control" name="name"
                                                                            value="{{ old('name', $role->name) }}"
                                                                            type="text">
                                                                    </div>
                                                                </div>
                                                                <h3 class="text-xl my-4 text-gray-600">Permissions</h3>

                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        @foreach ($permissions as $permission)
                                                                            <label
                                                                                class="inline-flex items-center mt-3 mr-3"
                                                                                style="display: inline-flex; align-items:center;">
                                                                                <input type="checkbox"
                                                                                    class="form-checkbox h-5 w-5 text-blue-600"
                                                                                    name="permissions[]"
                                                                                    value="{{ $permission->id }}"
                                                                                    @if (count($role->permissions->where('id', $permission->id))) checked @endif><span
                                                                                    class="ml-2 text-gray-700">&nbsp;{{ $permission->name }}</span>
                                                                            </label>
                                                                        @endforeach
                                                                    </div>
                                                                </div>


                                                                <div class="mt-3">
                                                                    <button type="submit"
                                                                        class="btn float-right px-5 py-1 rounded btn-success">Submit</button>
                                                                </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end of role edit modal --}}
                                    @endforeach
                                @endcan
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- role create modal --}}
        <div id="create_role" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Role</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.roles.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Role Name <span class="text-danger">*</span></label>
                                        <input class="form-control" name="name" value="{{ old('name') }}"
                                            type="text">
                                    </div>
                                </div>
                                <h3 class="text-xl my-4 text-gray-600">Permissions</h3>
                                <div class="row">
                                    <div class="form-group">
                                        @foreach ($permissions as $permission)
                                            <label class="inline-flex items-center mt-3"
                                                style="display: inline-flex; align-items:center;">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600"
                                                    name="permissions[]" value="{{ $permission->id }}"><span
                                                    class="ml-2 text-gray-700">{{ $permission->name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn float-right px-5 py-1 rounded btn-success">Submit</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of role create modal --}}
        @include('includes.myJsLinks')
