<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">
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
                            <img src="{{ asset('styles/assets/img/icons/plus.svg') }}" alt="img" class="me-1"> Create
                            Lecture
                        </a>
                    @endcan
                </div>
            </div>

            <div class="container bordered">
                @foreach ($results as $item)
                    <div class="main-video">
                        <div class="video">
                            <video src="{{ Storage::url($item->video) }}" controls autoplay></video>
                            <h3 class="title border-top">Ziyarar BBC Hausa A Raudar Sheikh Tidjani Dake Fez Morocco</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @include('includes.myJsLinks')
