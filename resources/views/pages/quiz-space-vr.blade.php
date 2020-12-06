@extends('layouts.detail')

@section('title', 'Quiz Space VR')

@push('prepend-styles')
<link href="{{url('https://vjs.zencdn.net/7.10.2/video-js.css')}} " rel="stylesheet" />    
@endpush

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>August 2020</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Quiz Space VR</h1>
                </div>
                <hr class="line-separator">
                <div class="detail-header">
                    <div class="detail-header-title">Platform</div>
                    <div class="detail-header-content">Android</div>
                    <br>
                    <div class="detail-header-title">Technology</div>
                    <div class="detail-header-content">Unity</div>
                    <div class="detail-header-content">C#</div>
                    <div class="detail-header-content">Vuforia</div>
                    <br>
                    <div class="detail-header-title">Development Role</div>
                    <div class="detail-header-content">Unity Developer</div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Description</div>
                    <p class="detail-description-content">
                        This application was made as a final project during internship at 
                        octagon studio. The final task for internship is to create something 
                        new as desired which you want to use for new features in one of  
                        octagon studio applications using the existing assets. 
                        This application provides an educational quiz game about space 
                        including the solar system, planets, space objects, satellites, 
                        rovers, and space missions that utilizes virtual reality for a 
                        more enjoyable learning experience.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Lessons learned while creating this application are how to create 
                        an interactive virtual reality system that is interactive and easy to use, 
                        also learn how to store a lot of information and access it correctly.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/AplikasiMatematika')}}" class="btn disabled btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('https://drive.google.com/file/d/12GMnz-zCer4MLsfb412gcZ7FK1KP3t6o/view?usp=sharing')}}" class="btn btn-custom"><i class="fab fa-android mr-2"></i>Download Apk</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/spacequizvr/1.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/2.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/3.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/4.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/5.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/6.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/7.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/spacequizvr/8.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
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
                            <source src="{{url('frontend/videos/quiz-space-vr.mp4')}}" type="video/mp4" />
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