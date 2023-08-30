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
        {{-- <div class="card">
            <div class="card-body"> --}}
                <div class="container bordered">
                    <div class="main-video">
                        <div class="video">
                            <video src="{{ asset('styles/assets/videos/bbc.mp4')}}" controls autoplay></video>
                            <h3 class="title border-top">Ziyarar BBC Hausa A Raudar Sheikh Tidjani Dake Fez Morocco</h3>
                        </div>
                    </div>
                    <div class="video-list">
                        @foreach ($lectures as  $lecture)
                            <div class="vid">
                                <video src="{{ Storage::url($lecture->video) }}" muted></video>
                                <h5 class="title">{{ $lecture->title }} <br><small style="font-size: 12px;" class="text-end">uploaded by: {{ $lecture->name ? $lecture->name : null }}</small></h5>
                            </div>
                        @endforeach
                        <div class="pt-2"  style="display: flex; justify-content: center;">
                            {{ $lectures->links() }}
                        </div>
                    </div>


                </div>
            {{-- </div>
        </div> --}}
</div>
<style>
    .w-5{
        display: none;
    }
</style>

<script>
    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo = document.querySelector('.main-video video');
    let title     = document.querySelector('.main-video .title');

    listVideo.forEach(video => {
        video.onclick = () => {
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');

            if (video.classList.contains('active')) {
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;
            }
        }
    });
</script>
@include('includes.myJsLinks')
