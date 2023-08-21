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
                        <h4>Profile</h4>
                        <h6>Manage Profile</h6>
                    </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="profile-set">
                    <div class="profile-head">
                </div>

                <form action="{{route('admin.users.update', Auth::user()->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="profile-top">
                        <div class="profile-content">
                            <div class="profile-contentimg">
                                    <img src="public/images/{{auth()->user()->profile}}" alt="img" id="blah">
                                    <div class="profileupload">
                                    <input type="file" id="imgInp" name="profile">
                                        <a href="javascript:void(0);"><img src="{{asset('styles/assets/img/icons/edit-set.svg')}}" alt="img"></a>
                                    </div>
                            </div>
                            <div class="profile-contentname">
                                <h2>William Castillo</h2>
                                <h4>Updates Your Photo and Personal Details.</h4>
                            </div>
                        </div>

                    </div>
                </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" placeholder="William">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value=" {{ old('email', Auth::user()->email) }} " placeholder="william@example.com">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" value="{{ old('password') }}" class=" pass-input">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password_confirmation" value="{{ old('password') }}" class=" pass-input">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-submit me-2">Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="text-start">Update Profile Picture</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('admin.index.update', Auth::user()->uuid) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="file" name="profile" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-submit me-2">Update</button>
                            </form>
                        </div>
                </div>
               </div>
            </div>
    </div>


@include('includes.myJsLinks')
