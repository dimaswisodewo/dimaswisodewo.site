@extends('layouts.detail')

@section('title', $item->title)

@push('prepend-styles')
<link href="{{url('https://vjs.zencdn.net/7.10.2/video-js.css')}} " rel="stylesheet" />    
@endpush

@section('content')
<main>
    <div class="container-fluid container-detail">
        <div class="container">
            <div class="section-detail">
                <div class="detail-date text-center">
                    <h5>{{ \Carbon\Carbon::parse($item->project_date)->format('M Y') }}</h5>
                </div>
                <div class="detail-title text-center">
                    <h1>{{ $item->title }}</h1>
                </div>
                <hr class="line-separator">
                <div class="detail-header">
                    <div class="detail-header-title">Platform</div>
                    @foreach ($item->platforms as $platform)   
                        <div class="detail-header-content">{{ $platform->platform }}</div>
                    @endforeach
                    <br>
                    <div class="detail-header-title">Technology</div>
                    @foreach ($item->technologies as $technology)
                        <div class="detail-header-content">{{ $technology->technology }}</div>
                    @endforeach
                    <br>
                    <div class="detail-header-title">Development Role</div>
                    @foreach ($item->roles as $role)
                        <div class="detail-header-content">{{ $role->role }}</div>
                    @endforeach
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Description</div>
                    @if (!is_null($item->details))
                        <p class="detail-description-content">
                            {{ $item->details->description }}
                        </p>                        
                    @endif
                    {{--  <p class="detail-description-content">
                        {{ $item->details->description }}
                    </p>  --}}
                    <br>
                    <div class="detail-description-title">Lessons Learned</div>
                    @if (!is_null($item->details))
                        <p class="detail-description-content">
                            {{ $item->details->lessons_learned }}
                        </p>                        
                    @endif
                    {{--  <p class="detail-description-content">
                        {{ $item->details->lessons_learned }}
                    </p>  --}}
                    <br>
                    <div class="row mx-0 mb-5">
                        @isset($item->details->source_code)
                            <a href="{{url($item->details->source_code)}}" class="btn btn-custom mr-4"><i class="fab fa-github mr-2"></i>Source Code</a>    
                        @endisset
                        @empty($item->details->source_code)
                            <a href="" class="btn disabled btn-custom mr-4"><i class="fab fa-github mr-2"></i> Source Code</a>
                        @endempty

                        @isset($item->details->downloadable_file)
                            <a href="{{ url($item->details->downloadable_file) }}" class="btn btn-custom mr-4"><i class="fab fa-android mr-2"></i>Download File</a>    
                        @endisset
                        @empty($item->details->downloadable_file)
                            <a href="" class="btn disabled btn-custom mr-4"><i class="fab fa-android mr-2"></i>Download File</a>
                        @endempty
                    </div>
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Screenshots</div>
                    <br>
                    @forelse ($item->screenshots as $screenshot)
                        <picture>
                            <img src="{{ Storage::url($screenshot->image) }}" class="detail-image img-thumbnail m-2 m-md-3" alt="">
                        </picture>
                    @empty
                    
                    @endforelse
                </div>
                <hr class="line-separator">
                <div class="detail-description">
                    <div class="detail-description-title">Video</div>
                    <br>
                    {{--  <div class="embed-responsive embed-responsive-16by9">
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
                    </div>  --}}
                    
                        @forelse ($item->videos as $video)
                            <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ url($video->video) }}" allowfullscreen></iframe>
                            </div>
                        @empty
                            
                        @endforelse
                </div>
            </div>

        </div>
    </div>
</main>
@endsection

@push('addon-scripts')
<script src="{{url('https://vjs.zencdn.net/7.10.2/video.js')}}"></script>
@endpush