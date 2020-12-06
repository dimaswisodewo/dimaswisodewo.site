@extends('layouts.detail')

@section('title', 'Game Lost in Space')

@push('prepend-styles')
<link href="{{url('https://vjs.zencdn.net/7.10.2/video-js.css')}} " rel="stylesheet" />    
@endpush

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>October 2020</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Game Lost in Space</h1>
                </div>
                <hr class="line-separator">
                <div class="detail-header">
                    <div class="detail-header-title">Platform</div>
                    <div class="detail-header-content">Android</div>
                    <br>
                    <div class="detail-header-title">Technology</div>
                    <div class="detail-header-content">Unity</div>
                    <div class="detail-header-content">C#</div>
                    <br>
                    <div class="detail-header-title">Development Role</div>
                    <div class="detail-header-content">Unity Developer</div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Description</div>
                    <p class="detail-description-content">
                        Once upon a time there was an astronaut who was on his way back to earth. 
                        The astronaut had just been working overtime the day before his return day. 
                        He was very sleepy. He didn't notice an asteroid heading his way. An accident 
                        happened. Luckily the astronaut managed to get out of his rocket safely 
                        accompanied by his gun. He is lost in space.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Lessons learned while creating this game is how to use 2D light using Universal 
                        Render Pipeline, how to create a minimap, how to create pixel assets using piskel.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/Lost-in-Space-URP')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('https://drive.google.com/file/d/192WlPTqUo89UNL6h4rh93iYjsr4qEr2t/view?usp=sharing')}}" class="btn btn-custom"><i class="fab fa-android mr-2"></i>Download Apk</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/LostInSpace/cover.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                    </picture>
                </div>
                <div class="detail-description">
                    <div class="detail-description-title">Video</div>
                    <br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video
                        id="my-video"
                        class="video-js embed-responsive-item"
                        controls
                        preload="auto"
                        width="auto"
                        height="auto"
                        data-setup="{}"
                        >
                            <source src="{{url('frontend/videos/lost-in-space.mp4')}}" type="video/mp4" />
                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection

@push('addon-scripts')
<script src="{{url('https://vjs.zencdn.net/7.10.2/video.js')}}"></script>
@endpush