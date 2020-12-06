@extends('layouts.detail')

@section('title', 'Math App')

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>January 2020</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>Math App</h1>
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
                        Educational applications for high school students in the field of 
                        social arithmetic including buying and selling, profit, loss, 
                        discount, tax, single interest, gross, net and tare. This 
                        application provides practice questions, video animations, 
                        evaluation questions, and examples of the application of 
                        social arithmetic in the real world. This application was 
                        made as a bachelor's thesis of one of the mathematics 
                        students at the university.
                    </p>
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    <p class="detail-description-content">
                        Lessons learned while creating this application is how to provide 
                        examples of social arithmetic in the real world such as buying and 
                        selling transactions using the messenger application.
                    </p>
                    <br>
                    <div class="row mx-0 mb-5">
                        <a href="{{url('https://github.com/dimaswisodewo/AplikasiMatematika')}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        <a href="{{url('https://drive.google.com/file/d/1BuAwEokDFEx-Ir0MRl4OsxYLq0qCpL8j/view?usp=sharing')}}" class="btn btn-custom"><i class="fab fa-android mr-2"></i>Download Apk</a>
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    <picture>
                        <img src="{{url('frontend/images/mathapp/menu.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/login.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/submenu.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/subsubmenu.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/tanya.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/tanya-2.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/video.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/kuis.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/kuis-2.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/kuis-3.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        <img src="{{url('frontend/images/mathapp/kuis-4.png')}}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                    </picture>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection