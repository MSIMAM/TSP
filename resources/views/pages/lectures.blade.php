@include('layout.myStyleLinks')

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>
<!-- Vendor CSS Files -->
<link href="{{ asset('styles/assets/aos/aos.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('styles/assets/maincss/css/bootstrap.min.css')}}">
{{-- <link href="{{ asset('styles/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
<link href="{{ asset('styles/assets/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{ asset('styles/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{ asset('styles/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{ asset('styles/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('styles/boxicons/css/boxicons.min.css')}}">

<!-- Template Main CSS File -->
<link href="{{ asset('styles/assets/maincss/style.css')}}" rel="stylesheet">
<link href="{{ asset('styles/assets/maincss/css/vendorStyle.css')}}" rel="stylesheet">
<link href="{{ asset('styles/assets/maincss/demo.css')}}" rel="stylesheet">
<link href="{{ asset('styles/assets/maincss/core.css')}}" rel="stylesheet">



     {{--============== include header =============--}}
        @include('includes.header2')
     {{--==============end include header =============--}}

        <div class="container">
            <div class="main-video">
                <div class="video">
                    <video src="{{ asset('styles/assets/videos/bbc.mp4')}}" controls autoplay></video>
                        <div class="d-flex align-items-center border-top m-2">
                            <h3 class="title">Ziyarar BBC Hausa A Raudar Sheikh Tidjani Dake Fez Morocco</h3>
                            <a href="" class="icon"><i class="bx bx-download" style="font-size: 20px; float-right"></i></a>
                        </div>
                </div>
            </div>
            <div class="video-list">
                @foreach ($lectures as $lecture)
                    <div class="vid">
                        <video src="{{ Storage::url($lecture->video) }}" muted></video>
                        <h5 class="title">{{ $lecture->title }} <br><small style="font-size: 12px;" class="text-end">uploaded by: </small></h5>
                        <form action="{{ url('download',$lecture->id) }}" method="POST">
                            @csrf
                            @method('POST')
                            {{-- <button><i class="bx bx-download" style="font-size: 20px; float-right"></i></button> --}}
                        </form>
                    </div>
                @endforeach
                        <div class="pt-2" style="display: flex; justify-content: center;">
                            {{ $lectures->links() }}
                        </div>


            </div>

        </div>


<!-- Vendor JS Files -->
<script src="{{ asset('styles/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{ asset('styles/aos/aos.js')}}"></script>
<script src="{{ asset('styles/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('styles/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('styles/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('styles/swiper/swiper-bundle.min.js')}}"></script>
{{-- <script src="{{ asset('styles/assets/php-email-form/validate.js')}}"></script> --}}
<script src="{{ asset('styles/jquery/jquery.slim.min.js')}}"></script>
<script src="{{ asset('styles/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('styles/assets/js/bootstrap.min.js')}}"></script>

<!-- Website Main JS File -->
<script src="{{ asset('styles/assets/mainjs/main.js')}}"></script>
<script>
    let listVideo = document.querySelectorAll('.video-list .vid');
    let mainVideo = document.querySelector('.main-video video');
    let title     = document.querySelector('.main-video .title');
    let icon      = document.querySelector('.main-video .icon')

    listVideo.forEach(video => {
        video.onclick = () =>{
            listVideo.forEach(vid => vid.classList.remove('active'));
            video.classList.add('active');

            if (video.classList.contains('active')) {
                let src = video.children[0].getAttribute('src');
                mainVideo.src = src;
                let text = video.children[1].innerHTML;
                title.innerHTML = text;
                let downloadIcon = video.children[2].innerHTML;
                icon.innerHTML = downloadIcon;
            }
        }
    });
</script>

@include('includes.myJsLinks')
