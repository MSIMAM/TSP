@include('layout.myStyleLinks')

<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

@include('includes.header')

@include('includes.main-sidebar')
<div class="page-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.lectures.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-sm-6">
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title" @required(true)>
                                @error('title')
                                    <span class="text-danger pt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-6">
                            <div class="form-group">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                    <input type="file" name="video" class="custom-file-container__custom-file__custom-file-input" accept="video/*" @required(true)>
                                    @error('title')
                                        <span class="text-danger pt-2">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('includes.myJsLinks')
