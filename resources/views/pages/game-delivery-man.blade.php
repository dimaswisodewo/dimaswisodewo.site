@extends('layouts.detail')

@section('title', 'Game Delivery Man')

@push('prepend-styles')
<link href="{{url('https://vjs.zencdn.net/7.10.2/video-js.css')}} " rel="stylesheet" />    
@endpush

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>January 2019</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Game Delivery Man</h1>
                </div>
                <hr class="line-separator">
                <div class="detail-header">
                    <div class="detail-header-title">Platform</div>
                    <div class="detail-header-content">PC, Mac & Linux Standalone</div>
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
                        Simple game about a boy who volunteered to send ballot boxes to the warehouse by avoiding enemies.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Learn how to apply animation to characters when moving and use a simple unity ai agent so the enemy can chase the player.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/Game_KPUMan-')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('#')}}" class="btn disabled btn-custom"><i class="fa fa-desktop mr-2"></i>Download Exe</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/deliveryman/1.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
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
                            <source src="{{url('frontend/videos/delivery-man.mp4')}}" type="video/mp4" />
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