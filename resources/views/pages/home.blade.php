@extends('layouts.app')

@section('title', 'Portfolio - Meynabel Dimas Wisodewo')

@section('content')
    <main>
        <div class="container-fluid container-header">
            <div class="container">
                <section class="section-header">
                    <div class="row section-row">
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="left-content">
                                <h1>
                                    Meynabel
                                    <br>
                                    Dimas
                                    <br>
                                    Wisodewo.
                                </h1>
                                <hr class="line">
                                <div class="row social-media-row">
                                    <div class="col">
                                        <a href="{{url('https://github.com/dimaswisodewo')}} " class="link-icon mr-3">
                                            <i class="fab fa-github fa-lg"></i>
                                        </a>
                                        <a href="{{url('https://www.linkedin.com/in/dimas-wisodewo-422a3512b/')}}" class="link-icon mr-3">
                                            <i class="fab fa-linkedin fa-lg"></i>
                                        </a>
                                        <a href="#" class="link-icon">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <div class="right-content">
                                <h2>
                                    Introduction
                                </h2>
                                <p>
                                    Junior Programmer who has a passion for
                                    making games and applications. <br>
                                    I gain the most satisfaction when I am challenged, 
                                    have the opportunity to learn and develop, and meet 
                                    the organization's goals and customer expectations.
                                </p>
                                <a href="{{route('works')}} " class="link-icon link-icon-yellow">
                                    My Works <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>                    
                        </div>
                    </div>            
                </section>
            </div>     
        </div>

        <div class="container-fluid container-skill">
            <div class="container">
                <section class="section-skill">
                    <div class="row skill-row mb-4 mb-md-5 pt-5">
                        <h2 class="skill-title">Skills & Experiences</h2>
                    </div>
                    <div class="row work-experiences-row">
                        <div class="col-md-8">
                            <div class="row mb-5">
                                <div class="skill-item mr-3 mr-md-5 mt-3 mt-md-0">
                                    <div class="skill-icon d-flex align-items-center justify-content-center">
                                        <i class="fab fa-unity fa-4x"></i>
                                    </div>
                                    <div class="skill-desc mt-3 text-center">
                                        80%
                                    </div>
                                </div>
                                <div class="skill-item mr-3 mr-md-5 mt-3 mt-md-0">
                                    <div class="skill-icon d-flex align-items-center justify-content-center p-3">
                                        <!-- <i class="fab fa-unity fa-4x"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="500" height="500"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-2.45906,0 -4.91812,0.61813 -7.10844,1.85438l-57.9425,32.55906c-4.43438,2.48594 -7.18906,7.14875 -7.18906,12.1475v65.11813c0,4.99875 2.75469,9.66156 7.18906,12.1475l57.9425,32.55906c2.19031,1.23625 4.64937,1.85437 7.10844,1.85437c2.45906,0 4.91813,-0.61812 7.10844,-1.85437l57.9425,-32.54563c4.43438,-2.49937 7.18906,-7.16219 7.18906,-12.16094v-65.11813c0,-4.99875 -2.75469,-9.66156 -7.18906,-12.1475l-57.9425,-32.55906c-2.19031,-1.23625 -4.64937,-1.85438 -7.10844,-1.85438zM86,44.72c13.0075,0 25.03406,6.03344 32.82781,16.29969l-15.07688,8.73438c-4.52844,-4.95844 -10.965,-7.83406 -17.75094,-7.83406c-13.27625,0 -24.08,10.80375 -24.08,24.08c0,13.27625 10.80375,24.08 24.08,24.08c6.78594,0 13.2225,-2.87562 17.75094,-7.83406l15.07688,8.73438c-7.79375,10.26625 -19.82031,16.29969 -32.82781,16.29969c-22.76312,0 -41.28,-18.51687 -41.28,-41.28c0,-22.76312 18.51688,-41.28 41.28,-41.28zM120.4,68.8h6.88v6.88h6.88v-6.88h6.88v6.88h6.88v6.88h-6.88v6.88h6.88v6.88h-6.88v6.88h-6.88v-6.88h-6.88v6.88h-6.88v-6.88h-6.88v-6.88h6.88v-6.88h-6.88v-6.88h6.88zM127.28,82.56v6.88h6.88v-6.88z"></path></g></g></svg>
                                    </div>
                                    <div class="skill-desc mt-3 text-center">
                                        80%
                                    </div>
                                </div>
                                <div class="skill-item mr-3 mr-md-5 mt-3 mt-md-0">
                                    <div class="skill-icon d-flex align-items-center justify-content-center">
                                        <i class="fab fa-html5 fa-4x"></i>
                                    </div>
                                    <div class="skill-desc mt-3 text-center">
                                        40%
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="skill-item mr-3 mr-md-5 mt-3 mt-md-0">
                                    <div class="skill-icon d-flex align-items-center justify-content-center">
                                        <i class="fab fa-css3-alt fa-4x"></i>
                                    </div>
                                    <div class="skill-desc mt-3 text-center">
                                        40%
                                    </div>
                                </div>
                                <div class="skill-item mr-3 mr-md-5 mt-3 mt-md-0">
                                    <div class="skill-icon d-flex align-items-center justify-content-center">
                                        <i class="fab fa-bootstrap fa-4x"></i>
                                    </div>
                                    <div class="skill-desc mt-3 text-center">
                                        40%
                                    </div>
                                </div>                                
                                <div class="skill-item mr-3 mr-md-5 mt-3 mt-md-0">
                                    <div class="skill-icon d-flex align-items-center justify-content-center">
                                        <i class="fab fa-laravel fa-4x"></i>
                                    </div>
                                    <div class="skill-desc mt-3 text-center">
                                        20%
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0 mb-5">
                            <div class="row work-experiences">
                                <div class="col-2 col-md-3">
                                    <div class="work-year">2019</div>
                                </div>
                                <div class="col">
                                    <div class="work-position">Internship Unity Developer</div>
                                    <a href="{{url('https://octagon.studio/')}}" class="work-place">Octagon Studio</a>
                                </div>                         
                            </div>
                        </div>
                    </div>
                </section>
                
                <hr class="line-separator">

                <section class="section-testimonial">
                    <div class="row skill-row mb-4 mb-md-5 pt-5">
                        <h2 class="skill-title">Words from Clients</h2>
                    </div>
                    <div class="container">
                        <div class="row pb-5">
                            <div class="col-sm-6 col-md-4 mt-4 mb-5 mb-md-4">
                                <div class="card-testimonial d-flex flex-column px-sm-0 px-md-2 align-items-center">
                                    <h5 class="testimonial-name">Nyoman Desyana P.</h4>    
                                    <h5 class="testimonial-title">Mahasiswa Pendidikan Ekonomi</h4>   
                                    <img src="{{url('frontend/images/testimonial-1.jpeg')}}" class="img-thumbnail rounded-circle testimonial-image my-3" alt="">                                                             
                                    <p class="testimonial-description mt-2 text-center">
                                        "Aplikasinya bagus, sesuai sama yang di ekspektasi. Orangnya juga baik dan sabar juga.
                                        Pokoknya bagus lahh &#128521"
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 mt-4 mb-5 mb-md-4">
                                <div class="card-testimonial d-flex flex-column px-sm-0 px-md-2 align-items-center">
                                    <h5 class="testimonial-name">Slamet Suyadi</h4>    
                                    <h5 class="testimonial-title">Mahasiswa Pendidikan Geografi</h4> 
                                    <img src="{{url('frontend/images/testimonial-2.jpg')}}" class="img-thumbnail rounded-circle testimonial-image my-3" alt="">                                                               
                                    <p class="testimonial-description mt-2 text-center">
                                        "......."
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 mt-4 mb-5 mb-md-4">
                                <div class="card-testimonial d-flex flex-column px-sm-0 px-md-2 align-items-center">
                                    <h5 class="testimonial-name">Yusron Nasrullah</h4>    
                                    <h5 class="testimonial-title">Mahasiswa Pendidikan Matematika</h4>    
                                    <img src="{{url('frontend/images/testimonial-3.jpeg')}}" class="img-thumbnail rounded-circle testimonial-image my-3" alt="">                                                            
                                    <p class="testimonial-description mt-2 text-center">
                                        "Aplikasinya bagus, prosesnya cepat, bisa request mau dibuat gimana aja, harganya bersahabat."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>    
        
    </main>
@endsection