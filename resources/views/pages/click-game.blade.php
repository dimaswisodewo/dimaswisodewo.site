@extends('layouts.detail')

@section('title', 'Click Game')

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>January 2019</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Click Game</h1>
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
                        Simple game about clicking moving objects to get points.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Learn how to make a simple 2D game.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/Game_ClickGame')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('#')}}" class="btn disabled btn-custom"><i class="fa fa-desktop mr-2"></i>Download Exe</a>
                    </div>
                </div>
                <div class="detail-description">
                    <div class="detail-description-title">Video</div>
                    <br>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ARFLVTAk9oE" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection