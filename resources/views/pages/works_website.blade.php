@extends('layouts.detail')

@section('title', 'Works')

@section('content')
<main>
    <section class="section-works-header">
        <div class="container">
            <div class="d-flex">
                <a href="{{ route('works') }}" class="works-menu mr-3">Unity</a>
                <a href="{{ route('works_jupyter_notebook') }} " class="works-menu mr-3">Jupyter Notebook</a>
                <a href="{{ route('works_website') }} " class="works-menu active mr-3">Website</a>
            </div>
        </div>
    </section>
    <section class="section-works">
        <div class="container">
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 my-2 my-md-4">
                        <div class="card-works d-flex flex-column px-sm-0 px-md-4 text-center">
                                <h6 class="works-date">{{ \Carbon\Carbon::parse($item->project_date)->format('M Y') }}</h6>
                                <h4 class="works-title">{{ $item->title }}</h4>
                                <picture>
                                    @if ($item->screenshots->count() > 0)
                                        <img src="{{ Storage::url( $item->screenshots->first()['image'] )}}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                                    @else
                                        <img src="{{ url('frontend/images/website.png') }}" class="works-image img-thumbnail mt-3 mb-4" alt="">
                                    @endif
                                </picture>                                
                                <p class="works-description mt-auto">
                                    {{ $item->short_description }}
                                </p>
                                <a href="{{ route('detail', $item->slug) }}" class="link-icon link-icon-yellow works-link">See project <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                @endforeach               
            </div>
        </div>            
    </section>
</main>
@endsection