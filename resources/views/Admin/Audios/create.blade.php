@include('layout.myStyleLinks')

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">
{{--====================== Start Main Header ==================--}}
@include('includes.header')
{{--====================== End Main Header ==================--}}
{{--====================== Start Main Sidebar ==================--}}
@include('includes.main-sidebar')
{{--====================== End Main Sidebar ==================--}}
<div class="page-wrapper">
    <div class="content">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('audios.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    {{ $schollars }}
                    <div class="row">
                        <div class="col-lg-12 col-sm-6">
                            <div class="form-group">
                                <label for="schollar">Schollar</label>
                                <select id="schollar" class="form-control" name="schollar_uuid">
                                    @foreach ($schollars as $schollar)
                                        <option value="{{ $schollar->uuid }}">{{ $schollar->schollar_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="programes">Programe</label>
                                <select id="programes" class="form-control" name="programe_uuid">
                                    @foreach ($programes as $programe)
                                        <option value="{{ $programe->uuid }}">{{ $programe->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-lg-12 col-sm-6">
                            <div class="form-group">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                    <input type="file" name="audio" class="custom-file-container__custom-file__custom-file-input" accept="audio/*" @required(true)>
                                    @error('title')
                                        <span class="text-danger pt-2">{{ $message }}</span>
                                    @enderror
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="form-group">
                                <input class="form-control" type="file" name="audio">
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
{{--============== Start Js Links ============--}}
@include('includes.myJsLinks')
{{--============== End Js Links ============--}}

