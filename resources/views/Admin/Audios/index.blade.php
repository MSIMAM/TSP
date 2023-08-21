@include('layout.myStyleLinks')

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">
{{--====================== Start Main Header ================--}}
@include('includes.header')
{{--====================== Start Main Header ================--}}

{{--====================== Start Main Sidebar ================--}}
@include('includes.main-sidebar')
{{--====================== Start Main Sidebar ================--}}
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Audios</h4>
                <h6>Manage Audios</h6>
            </div>
            <div class="page-btn">
                {{-- @can('Permission create') --}}
                    <a href="{{ route('audios.create') }}" class="btn btn-added btn-primary btn-lg">
                        <img src="{{asset('styles/assets/img/icons/plus.svg')}}" alt="img" class="me-1"> Upload
                    </a>
                {{-- @endcan --}}
            </div>
        </div>
        {{-- <div class="containeer mr-2"> --}}
            <div class="row">
                {{-- {{ $audios }} --}}
                @foreach ($audios as $audio)
                    <div class="col-sm-6">
                        <div class="music-container">
                            <div class="box">
                                <div class="image">
                                    <img src="{{ asset('styles/assets/images/about.jpg') }}" alt="">
                                </div>
                                <div class="music">
                                    <audio src="{{ Storage::url($audio->audio) }}" controls loop ></audio>
                                    <p style="padding-left: 10px">Karatun {{ $audio->name }} zamana 22 Daga Bakin {{ $audio->schollar_name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        {{-- </div> --}}

    </div>
</div>


@include('includes.myJsLinks')
