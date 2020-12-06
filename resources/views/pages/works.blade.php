@extends('layouts.detail')

@section('title', 'Works')

@section('content')
<main>
    <section class="section-works-header">
        <div class="container">
            <div class="d-flex">
                <a href="#" class="works-menu active mr-3">Unity</a>
                <a href="#" class="works-menu mr-3">Jupyter Notebook</a>
            </div>
        </div>
    </section>
    <section class="section-works">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">August 2019</h6>
                            <h4 class="works-title">Space Quiz VR</h4>
                            <picture>
                                <img src="{{url('frontend/images/spacequizvr/8.jpeg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">Educational Virtual Reality quiz game about Space
                                including the solar system, planets, space objects, 
                                satellites, rovers, and space missions.
                            </p>
                            <a href="{{route('quiz-space-vr')}}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">January 2020</h6>
                            <h4 class="works-title">Math App</h4>
                            <picture>
                                <img src="{{url('frontend/images/mathapp/kuis.png')}}" class="works-image img-fluid img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">Educational application for high school students in the field of social 
                                arithmetic including buying and selling, profit, loss, discount, tax, interest, gross, net, and tare.
                            </p>
                            <a href="{{route('math-app')}} " class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">October 2020</h6>
                            <h4 class="works-title">Game Lost in Space</h4>
                            <picture>
                                <img src="{{url('frontend/images/LostInSpace/cover.jpeg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                A 2D game about an astronaut who lost in space and trying to go back to the earth.
                            </p>
                            <a href="{{route('game-lost-in-space')}} " class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">January 2020</h6>
                            <h4 class="works-title">Geo Natural Resource App</h4>
                            <picture>
                                <img src="{{url('frontend/images/geographyapp/3.jpg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Educational applications for high school students in the field of 
                                geography. This application was made as a bachelor's thesis of one 
                                of the geography students at the university.
                            </p>
                            <a href="{{route('geonaturalresource-app')}}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">May 2020</h6>
                            <h4 class="works-title">Game Shoot the Virus</h4>
                            <picture>
                                <img src="{{url('frontend/images/ShootTheVirus/1.jpg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Simple FPS game, shoot the viruses to win the game.
                            </p>
                            <a href="{{route('shoot-the-virus')}} " class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">December 2019</h6>
                            <h4 class="works-title">EcoEduApp</h4>
                            <picture>
                                <img src="{{url('frontend/images/ecoeduapp/1.jpeg')}}" class="works-image img-fluid img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">Educational application for high school students in the field of social 
                                Educational applications for high school students in the field 
                                of economy including economy development, economic growth, 
                                map of economic growth in Indonesia, theory in economics by 
                                experts, etc.
                            </p>
                            <a href="{{route('ecoeduapp')}} " class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">May 2019</h6>
                            <h4 class="works-title">AR Multi Target</h4>
                            <picture>
                                <img src="{{url('frontend/images/ARmultitarget/1.jpeg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Augmented Reality App that can detect more than one marker.
                            </p>
                            <a href="{{route('ar-multi-target')}}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">May 2019</h6>
                            <h4 class="works-title">AR Extended Tracking</h4>
                            <picture>
                                <img src="{{url('frontend/images/ARextendedtracking/1.jpeg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Augmented Reality App with extended tracking and interactions (scale, rotate) using LeanTouch.
                            </p>
                            <a href="{{route('ar-extended-tracking')}} " class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">January 2019</h6>
                            <h4 class="works-title">Game Delivery Man</h4>
                            <picture>
                                <img src="{{url('frontend/images/deliveryman/1.jpg')}}" class="works-image img-fluid img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Simple game about a boy who volunteered to send boxes
                                to the warehouse by avoiding enemies.
                            </p>
                            <a href="{{route('game-delivery-man')}} " class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">January 2019</h6>
                            <h4 class="works-title">Game Tetris</h4>
                            <picture>
                                <img src="{{url('frontend/images/unity.jpg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Remake of the classic tetris game.
                            </p>
                            <a href="{{route('game-tetris')}}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">January 2019</h6>
                            <h4 class="works-title">Game Ball Drive</h4>
                            <picture>
                                <img src="{{url('frontend/images/unity.jpg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Simple game about moving a ball to the finish line without falling.
                            </p>
                            <a href="{{route('game-ball-drive')}}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 my-2 my-md-4">
                    <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                            <h6 class="works-date">January 2019</h6>
                            <h4 class="works-title">Click Game</h4>
                            <picture>
                                <img src="{{url('frontend/images/unity.jpg')}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                            </picture>                                
                            <p class="works-description mt-auto">
                                Simple game about clicking moving objects to get points.
                            </p>
                            <a href="{{route('click-game')}}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>            
    </section>
</main>
@endsection