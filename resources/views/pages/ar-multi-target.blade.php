@extends('layouts.detail')

@section('title', 'AR Multi Target')

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>May 2019</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>AR Multi Target</h1>
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
                        Simple Augmented Reality App that can detect more than one marker.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Lessons learned while creating this application is how to create Augmented Reality App that can detect more than one marker.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/AR_IronMan_MultiTarget')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('#')}}" class="btn disabled btn-custom"><i class="fab fa-android mr-2"></i>Download Apk</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/ARmultitarget/1.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ARmultitarget/2.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                    </picture>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection