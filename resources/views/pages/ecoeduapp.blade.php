@extends('layouts.detail')

@section('title', 'EcoEduApp')

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>December 2019</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>EcoEduApp</h1>
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
                        Educational applications for high school students in the field 
                        of economy including economy development, economic growth, 
                        map of economic growth in Indonesia, theory in economics by 
                        experts, etc. This application provides quiz and high scores. 
                        This application was made as a bachelor's thesis of one of 
                        the economics students at the university.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Lessons learned while creating this application is how to provide quiz with high scores system.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/EkoEduApp')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('#')}}" class="btn disabled btn-custom"><i class="fab fa-android mr-2"></i>Download Apk</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/ecoeduapp/1.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/2.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/3.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/4.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/5.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/6.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/7.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/8.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/ecoeduapp/9.jpeg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                    </picture>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection