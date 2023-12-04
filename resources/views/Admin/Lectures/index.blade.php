@include('layout.myStyleLinks')

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

@include('includes.header')

@include('includes.main-sidebar')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Lectures</h4>
                <h6>Manage Lectures</h6>
            </div>
            <div class="page-btn">
                @can('Permission create')
                    <a href="{{ route('admin.lectures.create') }}" class="btn btn-added btn-primary btn-lg">
                        <img src="{{asset('styles/assets/img/icons/plus.svg')}}" alt="img" class="me-1"> Create Lecture
                    </a>
                @endcan
            </div>
        </div>
        {{-- <div class="row" style="margin-left: 35px">
            <div class="col-11">
                <div class="card">
                    <div class="search-path p-3">
                        <a class="btn btn-filter btn-success" id="filter_search">
                            <img src="{{ asset('styles/assets/img/icons/filter.svg')}}" alt="img">
                        </a>
                    </div>
                    <div class="card p-3" id="filter_inputs">
                        <div class="card-body pb-0">
                            <form action="" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-lg-11 col-sm-11 col-11">
                                        <div class="form-group">
                                            <input type="text" placeholder="Search" name="search">
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                        <div class="form-group">
                                            <button class="btn btn-filters ms-auto"><img src="{{ asset('styles/assets/img/icons/search-whites.svg')}}" alt="search image"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($videoLists as  $video)
                            <div class="col-sm-4 bg-light mt-3">
                                <iframe height="300px" src="https://www.youtube.com/embed/{{ $video->id->videoId }}" frameborder="1" allowfullscreen></iframe>
                                <h5 class="title">{{ $video->snippet->title }}</h5>
                                <p>{{ $video->snippet->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

</div>
<style>
    .w-5{
        display: none;
    }
</style>

@include('includes.myJsLinks')
