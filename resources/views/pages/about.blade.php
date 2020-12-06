@extends('layouts.about')

@section('title', 'About')

@section('content')
<main>
    <div class="container-fluid container-about">
        <div class="container">
            <!-- Medium -->
            <section class="section-about d-none d-md-block">
                <div class="row section-row">
                    <div class="col-md-6 about-column d-flex align-items-center justify-content-center">                            
                        <div class="about-content">
                            <h2>Hey! I'm Dimas.</h2>
                            <p>A Junior Programmer who has a passion for
                                making games and applications. <br>
                                I gain the most satisfaction when I am challenged, 
                                have the opportunity to learn and develop, and meet 
                                the organization's goals and customer expectations. <br>
                                <br>
                                Want to work with me?
                                <div class="row mx-0 mt-4">
                                    <button class="btn btn-custom mr-3" onclick="scrollToEmail()">Contact Me</button>
                                    <a href="{{route('works')}}" class="btn btn-custom">See Works</a>
                                </div>
                            </p>                                
                        </div>                            
                    </div>
                    <div class="col-md-6 about-column d-flex align-items-center justify-content-end">
                        <div class="about-image mr-4">
                            <img src="frontend/images/pp.jpg" alt="" class="about-image img-fluid img-thumbnail">
                        </div>
                    </div>
                </div>       
            </section>

            <!-- Mobile -->
            <section class="section-about d-block d-md-none">
                <div class="row section-row">
                    <div class="col-md-6 about-column d-flex align-items-center justify-content-center">                            
                        <div class="about-content about-content-small mt-5">
                            <h2>Hey! I'm Dimas.</h2>
                            <div class="about-image d-flex justify-content-center">
                                <img src="frontend/images/pp.jpg" alt="" class="about-image img-fluid img-thumbnail about-image-small">
                            </div>
                            <p>A Junior Programmer who has a passion for
                                making games and applications. <br>
                                I gain the most satisfaction when I am challenged, 
                                have the opportunity to learn and develop, and meet 
                                the organization's goals and customer expectations. <br>
                                <br>
                                Want to work with me?
                                <div class="row mx-0 mt-4 pb-5">
                                    <button class="btn btn-custom mr-3" onclick="scrollToEmail()">Contact Me</button>
                                    <a href="{{route('works')}} " class="btn btn-custom">See Works</a>
                                </div>
                            </p>                                
                        </div>                            
                    </div>
                </div>  
            </section> 
        </div>     
    </div>
</main>    
@endsection

@push('addon-scripts')
<script>
    function scrollToEmail() {
        var elmnt = document.getElementById("contact");
        elmnt.scrollIntoView();
    }
</script>
@endpush