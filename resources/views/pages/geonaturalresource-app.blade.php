@extends('layouts.detail')

@section('title', 'GeoNaturalResource App')

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>January 2020</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Geo Natural Resource App</h1>
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
                        Educational applications for high school students in the field of geography. 
                        This application was made as a bachelor's thesis of one of the 
                        geography students at the university.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Lessons learned while creating this application is how to save and access object within object in JSON file.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('#')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('https://drive.google.com/file/d/17xsI69ZjLVkdyoqXSKcjcFD1FZWwGtvZ/view?usp=sharing')}}" class="btn btn-custom"><i class="fa fa-desktop mr-2"></i>Download Exe</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/geographyapp/1.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/2.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/3.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/4.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/5.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/6.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/7.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/8.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/9.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/10.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/11.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/12.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/13.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/14.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/geographyapp/15.jpg')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                    </picture>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection