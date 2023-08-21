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
                        <h4>Permissions</h4>
                        <h6>Manage Permissions</h6>
                    </div>
                    <div class="page-btn">
                        @can('Permission create')
                            <button type="button" class="btn btn-added btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">
                                <img src="{{asset('styles/assets/img/icons/plus.svg')}}" alt="img" class="me-1"> Add permission
                            </button>
                        @endcan
                    </div>
            </div>

            <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{asset('styles/assets/img/icons/search-white.svg')}}" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('styles/assets/img/icons/pdf.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('styles/assets/img/icons/excel.svg')}}" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('styles/assets/img/icons/printer.svg')}}" alt="img"></a>
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
                                    <th>Permission</th>
                                    <th>Created By</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @can('Permission access')
                                    @foreach($permissions as $permission)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                {{ $permission->created_by }}
                                            </td>
                                            <td class="text-end">
                                                <a class="me-3" href="#" data-bs-toggle="modal" data-bs-target="#edit_permission{{$permission->id}}">
                                                    <img src="{{asset('styles/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <form action="{{ route('admin.permissions.destroy',$permission->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="me-3" class="btn btn-success" data-confirm-delete="true">
                                                        <img src="{{asset('styles/assets/img/icons/delete.svg')}}" alt="img">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>


                                        <!-- edit permission modal-->
                                        <div class="modal fade" id="edit_permission{{$permission->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Permission</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.permissions.update',$permission->id)}}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row">
                                                              <div class="col-sm-12">
                                                                <div class="form-group">
                                                                  <label>Permission Name <span class="text-danger">*</span></label>
                                                                  <input class="form-control" name="name" value="{{ old('name',$permission->name)}}" type="text">
                                                                </div>
                                                              </div>

                                                              <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">update</button>
                                                              </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end edit permission modal-->
                                    @endforeach
                                @endcan
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
 {{-- permission create modal --}}
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.permissions.store')}}" method="POST">
                    @csrf

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Permission Name <span class="text-danger">*</span></label>
                          <input class="form-control" name="name" value="{{ old('name')}}" type="text">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- end of permission create modal --}}
@include('includes.myJsLinks')
