@include('layout.myStyleLinks')

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

@include('includes.header1')

<div class="page-wrapper">

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
