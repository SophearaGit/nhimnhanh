@extends('frontend.layouts.pages-layout')
@section('page_title', $project['title'])
@section('content')

    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <h1>{{ $project['title'] }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Project</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- End Breadcrumb -->

    <!-- Start Background Move -->
    <div class="banner-animation-zoom overflow-hidden">
        <div class="container">
            <div class="image-move-bg">
                <div class="animation-zoom-banner" id="js-hero">
                    <img src="{{ asset($project['thumbnail']) }}" alt="{{ $project['title'] }}">
                </div>
            </div>
        </div>
    </div>

    <!-- End Background Move -->

    <!-- Start Project Details Area -->
    <div class="project-details-items default-padding">
        <div class="container">
            <div class="top-info">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 left-info mb-xs-40 mb-md-50">
                        <div class="project-single-info">
                            <ul>
                                <li>Client <span>{{ $project['client'] }}</span></li>
                                <li>Date <span>{{ $project['date'] }}</span></li>
                                <li>Service <span>{{ $project['service'] }}</span></li>
                                <li>Address <span>{{ $project['address'] }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-info col-xl-8 col-lg-7 pl-50 pl-md-15 pl-xs-15 mt-md-10">
                        <h2>Description</h2>
                        <p>{{ $project['description'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Images -->
    <div class="project-details-items default-padding-bottom">
        <div class="container">
            <div class="project-thumb mt-md--25 mt-xs--25">
                <div class="row">
                    @foreach ($project['images'] as $index => $image)
                        <div class="{{ $index === 0 ? 'col-md-7' : 'col-md-5' }}">
                            <img src="{{ asset($image) }}" alt="{{ $project['title'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Background / Challenges / Solution -->
    <div class="project-details-items default-padding bg-gray">
        <div class="container">
            <div class="item-grid-container">
                <div class="single-grid">
                    <div class="item-grid-colum">
                        <div class="left-info">
                            <h2>Background</h2>
                        </div>
                        <div class="right-info">
                            <p>{{ $project['background'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="single-grid">
                    <div class="item-grid-colum">
                        <div class="left-info">
                            <h2>The Challenges</h2>
                        </div>
                        <div class="right-info">
                            <p>{{ $project['challenges'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="single-grid">
                    <div class="item-grid-colum">
                        <div class="left-info">
                            <h2>The Solution</h2>
                        </div>
                        <div class="right-info">
                            <p>{{ $project['solution'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Prev / Next Pagination -->
    <div class="project-pagination default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-paginvation-items mt-xs--25 mt-md--25">
                        @if ($prev)
                            <div class="project-previous">
                                <a href="{{ route('project.detail', $prev['id']) }}">
                                    <div class="icon"><i class="fas fa-angle-double-left"></i></div>
                                    <div class="nav-title">Previous Post <h5>{{ $prev['title'] }}</h5>
                                    </div>
                                </a>
                            </div>
                        @else
                            <div class="project-previous"></div>
                        @endif
                        <div class="project-all">
                            <a href="{{ route('home') }}#portfolio"><i class="fas fa-th-large"></i></a>
                        </div>
                        @if ($next)
                            <div class="project-next">
                                <a href="{{ route('project.detail', $next['id']) }}">
                                    <div class="nav-title">Next Post <h5>{{ $next['title'] }}</h5>
                                    </div>
                                    <div class="icon"><i class="fas fa-angle-double-right"></i></div>
                                </a>
                            </div>
                        @else
                            <div class="project-next"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Project Details Area -->
@endsection
