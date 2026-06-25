<div id="portfolio" class="portfolio-style-one-area default-padding bg-gray">
    <div class="shape-top-left">
        <img src="{{ asset('frontend/assets/img/shape/9.png') }}" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">Portfolio</h4>
                    <h2 class="title">My Recent Work</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 gallery-content">
                <div class="magnific-mix-gallery gallery-masonary">
                    <div id="gallery-masonary" class="gallery-items colums-3">

                        @foreach ($projects as $project)
                            <div class="gallery-item">
                                <div class="gallery-style-one">
                                    <img src="{{ asset($project['thumbnail']) }}" alt="{{ $project['title'] }}">
                                    <div class="info">
                                        <div class="overlay">
                                            <div class="content">
                                                <ul class="pf-tags">
                                                    @foreach ($project['tags'] as $tag)
                                                        <li><a href="#">{{ $tag }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="icon">
                                                <a href="{{ route('project.detail', $project['id']) }}">
                                                    <i class="fas fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h4>
                                            <a href="{{ route('project.detail', $project['id']) }}">
                                                {{ $project['title'] }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="load-more-info text-center mt-60 mt-xs-30">
                            <p>Showing {{ count($projects) }} of 13 projects. <a href="#">Load More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
