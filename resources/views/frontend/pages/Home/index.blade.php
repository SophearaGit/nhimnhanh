@extends('frontend.layouts.pages-layout')
@section('page_title', isset($page_title) ? $page_title : 'Page Title Here')
@section('content')
    @include('frontend.pages.Home.partials.banner')
    @include('frontend.pages.Home.partials.about')
    @include('frontend.pages.Home.partials.services')
    @include('frontend.pages.Home.partials.portfolio')
    @include('frontend.pages.Home.partials.fact')









    <!-- Start Timeline
                                                    ============================================= -->
    <div id="resume" class="timeline-area default-padding bg-gray">
        <div class="container">
            <div class="time-line-style-one-box">
                <div class="row guttex-xl">
                    <div class="col-lg-6">
                        <h2>My Expertise</h2>
                        <div class="time-style-one-items">

                            <!-- Single Item -->
                            <div class="timeline-style-one-item wow fadeInUp">
                                <div class="timeline-header">
                                    <div class="left">
                                        <h4>Lead Developer</h4>
                                        <p>
                                            Blockdots, London
                                        </p>
                                    </div>
                                    <div class="right">
                                        <span>2022 - Present</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        The education should be very interactual. Ut tincidunt est ac dolor aliquam
                                        sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                        hendrerit ante. sectors of the economy or areas of culture sed mauris hendrerit,
                                        laoreet smart software.
                                    </p>
                                </div>
                            </div>

                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="timeline-style-one-item wow fadeInUp">
                                <div class="timeline-header">
                                    <div class="left">
                                        <h4>Full Stack Web Developer</h4>
                                        <p>
                                            Parsons, The New School
                                        </p>
                                    </div>
                                    <div class="right">
                                        <span>2021 - 2022</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        The education should be very interactual. Ut tincidunt est ac dolor aliquam
                                        sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                        hendrerit ante. sectors of the economy or areas of culture sed mauris hendrerit,
                                        laoreet smart software.
                                    </p>
                                </div>
                            </div>

                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="timeline-style-one-item wow fadeInUp">
                                <div class="timeline-header">
                                    <div class="left">
                                        <h4>UI Designer</h4>
                                        <p>
                                            House of Life, Leeds
                                        </p>
                                    </div>
                                    <div class="right">
                                        <span>2018 - 2023</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        The education should be very interactual. Ut tincidunt est ac dolor aliquam
                                        sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                        hendrerit ante. sectors of the economy or areas of culture sed mauris hendrerit,
                                        laoreet smart software.
                                    </p>
                                </div>
                            </div>

                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Education Background</h2>
                        <div class="time-style-one-items">

                            <!-- Single Item -->
                            <div class="timeline-style-one-item wow fadeInUp">
                                <div class="timeline-header">
                                    <div class="left">
                                        <h4>Programming Course</h4>
                                        <p>
                                            Harverd University
                                        </p>
                                    </div>
                                    <div class="right">
                                        <span>2006 - 2014</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        The education should be very interactual. Ut tincidunt est ac dolor aliquam
                                        sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                        hendrerit ante. sectors of the economy or areas of culture sed mauris hendrerit,
                                        laoreet smart software.
                                    </p>
                                </div>
                            </div>

                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="timeline-style-one-item wow fadeInUp">
                                <div class="timeline-header">
                                    <div class="left">
                                        <h4>Graphic Design Course</h4>
                                        <p>
                                            Blockdots, London
                                        </p>
                                    </div>
                                    <div class="right">
                                        <span>2016 - 2020</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        The education should be very interactual. Ut tincidunt est ac dolor aliquam
                                        sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                        hendrerit ante. sectors of the economy or areas of culture sed mauris hendrerit,
                                        laoreet smart software.
                                    </p>
                                </div>
                            </div>

                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="timeline-style-one-item wow fadeInUp">
                                <div class="timeline-header">
                                    <div class="left">
                                        <h4>Web design course</h4>
                                        <p>
                                            University of California
                                        </p>
                                    </div>
                                    <div class="right">
                                        <span>2012 - 2015</span>
                                    </div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        The education should be very interactual. Ut tincidunt est ac dolor aliquam
                                        sodales. Phasellus sed mauris hendrerit, laoreet sem in, lobortis mauris
                                        hendrerit ante. sectors of the economy or areas of culture sed mauris hendrerit,
                                        laoreet smart software.
                                    </p>
                                </div>
                            </div>

                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Timeline -->

    <!-- Start Partner
                                                    ============================================= -->
    <div class="partner-style-one-area text-center default-padding bottom-less overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Partner</h4>
                        <h2 class="title">With The World Premier 80+ Brands</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="partner-style-one-items">

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInLeft">
                            <img src="frontend/assets/img/partner/1.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInLeft">
                            <img src="frontend/assets/img/partner/2.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInLeft">
                            <img src="frontend/assets/img/partner/3.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInLeft">
                            <img src="frontend/assets/img/partner/4.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->
                    </div>
                    <div class="partner-style-one-items">

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInRight">
                            <img src="frontend/assets/img/partner/5.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInRight">
                            <img src="frontend/assets/img/partner/6.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="partner-style-one-item wow fadeInRight">
                            <img src="frontend/assets/img/partner/7.png" alt="Image Not Found">
                        </div>

                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Partner -->

    <!-- Start Testimonial
                                                    ============================================= -->
    <div class="testimonial-style-one-area default-padding bg-gray">
        <div class="shape-left-top">
            <img src="frontend/assets/img/shape/10.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-xl-6">
                        <h4 class="sub-title">Testimonials</h4>
                        <h2 class="title">Clients Testimonials</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-style-one-items">
                        <div class="testimonial-style-one-carousel swiper">

                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">

                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-style-one">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="inner">
                                                    <img src="frontend/assets/img/illustration/2.png"
                                                        alt="Image Not Found">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="tm-review">
                                                    <div class="top">
                                                        <h5>Reviews On</h5>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="bottom">
                                                        <img src="frontend/assets/img/partner/9.png"
                                                            alt="Image Not Found">
                                                        <p>4.9/ 60 Reviews</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    "Thanks to your web agency team for their professional work. The
                                                    website they created for my business exceeded my expectations, and
                                                    my clients have given positive feedback about its design and
                                                    user-friendliness."
                                                </p>
                                                <div class="tm-footer">
                                                    <div class="provider">
                                                        <h4>Brooklyn Simmons</h4>
                                                        <span>UI/UX DESIGNER</span>
                                                    </div>
                                                    <span>01</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Single item -->

                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-style-one">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="inner">
                                                    <img src="frontend/assets/img/illustration/3.png"
                                                        alt="Image Not Found">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="tm-review">
                                                    <div class="top">
                                                        <h5>Reviews On</h5>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="bottom">
                                                        <img src="frontend/assets/img/partner/9.png"
                                                            alt="Image Not Found">
                                                        <p>4.9/ 60 Reviews</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    "Thanks to your web agency team for their professional work. The
                                                    website they created for my business exceeded my expectations, and
                                                    my clients have given positive feedback about its design and
                                                    user-friendliness."
                                                </p>
                                                <div class="tm-footer">
                                                    <div class="provider">
                                                        <h4>Brooklyn Simmons</h4>
                                                        <span>UI/UX DESIGNER</span>
                                                    </div>
                                                    <span>02</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Single item -->

                                <!-- Single item -->
                                <div class="swiper-slide">
                                    <div class="testimonial-style-one">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="inner">
                                                    <img src="frontend/assets/img/illustration/4.png"
                                                        alt="Image Not Found">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="tm-review">
                                                    <div class="top">
                                                        <h5>Reviews On</h5>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="bottom">
                                                        <img src="frontend/assets/img/partner/9.png"
                                                            alt="Image Not Found">
                                                        <p>4.9/ 60 Reviews</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    "Thanks to your web agency team for their professional work. The
                                                    website they created for my business exceeded my expectations, and
                                                    my clients have given positive feedback about its design and
                                                    user-friendliness."
                                                </p>
                                                <div class="tm-footer">
                                                    <div class="provider">
                                                        <h4>Brooklyn Simmons</h4>
                                                        <span>UI/UX DESIGNER</span>
                                                    </div>
                                                    <span>03</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Single item -->
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="testimonial-pagination">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Testimonial -->

    <!-- Start Pricing
                                                    ============================================= -->
    <div id="pricing" class="pricing-style-one-area default-padding bg-light">
        <div class="shape-right-top">
            <img src="frontend/assets/img/shape/15.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Pricing</h4>
                        <h2 class="title">The best pricing plans to get your best</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Item -->
                <div class="col-lg-6 pricing-one-single">
                    <div class="pricing-style-one wow fadeInUp">
                        <div class="pricing-top">
                            <div class="right">
                                <i class="fab fa-wordpress"></i>
                            </div>
                            <div class="left">
                                <h4>WordPress Development</h4>
                                <p>
                                    Simple and flexible per - user pricing
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="price">
                                <h2><sup>$</sup>48</h2>
                            </div>
                            <ul>
                                <li>1 Page with Elementor</li>
                                <li>Design Customization</li>
                                <li>Responsive Design</li>
                                <li>1 Page with Elementor</li>
                                <li>Design Customization</li>
                                <li>Responsive Design</li>
                            </ul>
                            <div class="button mt-30">
                                <a class="btn-style-regular" href="#contact"><span>Order Now</span> <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-lg-6 pricing-one-single">
                    <div class="pricing-style-one wow fadeInUp" data-wow-delay="200ms">
                        <div class="pricing-top">
                            <div class="right">
                                <i class="fab fa-bootstrap"></i>
                            </div>
                            <div class="left">
                                <h4>Static frontend design</h4>
                                <p>
                                    Simple and flexible per - user pricing
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="price">
                                <h2><sup>$</sup>28</h2>
                            </div>
                            <ul>
                                <li>2 Page with Bootstrap5</li>
                                <li>Design implement</li>
                                <li>Responsive Design</li>
                                <li>2 Page with Bootstrap5</li>
                                <li>Design implement</li>
                                <li>Responsive Design</li>
                            </ul>
                            <div class="button mt-30">
                                <a class="btn-style-regular btn-border" href="#contact"><span>Order Now</span> <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->
            </div>
        </div>
    </div>

    <!-- End Pricing -->

    <!-- Start Faq
                                                    ============================================= -->
    <div class="faq-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumb-style-one">
                        <img src="frontend/assets/img/about/3.jpg" alt="Image Not Found">
                        <div class="chat-card">
                            <p>Can't find what your are loking for you?</p>
                            <h5>I would like to chat with you</h5>
                            <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                            <img src="frontend/assets/img/shape/12.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="faq-style-one-items">
                        <h4 class="sub-title">Faq</h4>
                        <h2>Frequently Asked Questions</h2>
                        <div class="accordion mt-30" id="faqAccordion">
                            <div class="accordion-item accordion-style-one">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        May i see your work samples?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            New had happen unable uneasy. Drawings can followed improved out sociable
                                            not. Earnestly so do instantly pretended. See general few civilly amiable
                                            pleased account carried. Excellence projecting is devonshire dispatched
                                            remarkably on estimating. Side in so life past.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-style-one">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What are your rates?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            New had happen unable uneasy. Drawings can followed improved out sociable
                                            not. Earnestly so do instantly pretended. See general few civilly amiable
                                            pleased account carried. Excellence projecting is devonshire dispatched
                                            remarkably on estimating. Side in so life past.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-style-one">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How do you prefer to communicate?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            New had happen unable uneasy. Drawings can followed improved out sociable
                                            not. Earnestly so do instantly pretended. See general few civilly amiable
                                            pleased account carried. Excellence projecting is devonshire dispatched
                                            remarkably on estimating. Side in so life past.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Faq -->

    <!-- Start Contact
                                                    ============================================= -->
    <div id="contact" class="contact-style-one-area default-padding bg-gray">
        <div class="container">
            <div class="contact-style-one-items">
                <h1 class="fixed-text">Contact Me</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*"
                                            type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn-style-regular" type="submit" name="submit" id="submit">
                                        <span>Get in Touch</span> <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-illustration">
                    <img src="frontend/assets/img/illustration/5.png" alt="Image Not Found">
                    <img src="frontend/assets/img/shape/13.png" alt="Image Not Found">
                </div>
            </div>
        </div>
    </div>

    <!-- End Contact -->

    <!-- Start Blog
                                                    ============================================= -->
    <div id="blog" class="blog-area home-blog default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Blog Insight</h4>
                        <h2 class="title">Valuable insights to change your startup idea</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                    <div class="home-blog-style-one-item wow fadeInUp">
                        <div class="home-blog-thumb">
                            <img src="frontend/assets/img/blog/1.jpg" alt="Image not Found">
                        </div>
                        <div class="content">
                            <ul class="home-blog-meta">
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>July 24, 2024</li>
                            </ul>
                            <div class="info">
                                <h4 class="blog-title">
                                    <a href="blog-single-with-sidebar.html">Picked up brussels burger signications with
                                        ham efforts.</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-read-more">Read More <i
                                        class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                    <div class="home-blog-style-one-item wow fadeInUp">
                        <div class="home-blog-thumb" data-wow-delay="200ms">
                            <img src="frontend/assets/img/blog/2.jpg" alt="Image not Found">
                        </div>
                        <div class="content">
                            <ul class="home-blog-meta">
                                <li>
                                    <a href="#">Mockup</a>
                                </li>
                                <li>October 18, 2024</li>
                            </ul>
                            <div class="info">
                                <h4 class="blog-title">
                                    <a href="blog-single-with-sidebar.html">This prefabrice passive house is highly
                                        sustainable with intent</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-read-more">Read More <i
                                        class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                    <div class="home-blog-style-one-item wow fadeInUp" data-wow-delay="400ms">
                        <div class="home-blog-thumb">
                            <img src="frontend/assets/img/blog/3.jpg" alt="Image not Found">
                        </div>
                        <div class="content">
                            <ul class="home-blog-meta">
                                <li>
                                    <a href="#">Discuss</a>
                                </li>
                                <li>August 26, 2024</li>
                            </ul>
                            <div class="info">
                                <h4 class="blog-title">
                                    <a href="blog-single-with-sidebar.html">Announcing if attachment resolution sentim
                                        commercial.</a>
                                </h4>
                                <a href="blog-single-with-sidebar.html" class="btn-read-more">Read More <i
                                        class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->
            </div>
        </div>
    </div>

    <!-- End Blog -->

    <!-- Start Promo box
                                                    ============================================= -->
    <!-- Start Promo box -->

    <div class="promot-box-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="promo-box-items text-center">
                        <h2>Let's Build the Future with Technology 🚀</h2>

                        ```
                        <h4>
                            Available for IT Training, Business Collaboration, Consulting, and Digital Solutions.
                        </h4>

                        <p class="mt-3">
                            As Co-Founder & CEO of ICT Professional Training Center and ICT Solutions Co., Ltd.,
                            I am passionate about empowering individuals and organizations through technology,
                            innovation, and professional IT education.
                        </p>

                        <div class="button mt-40">
                            <a class="btn-style-regular" href="#contact">
                                <span>Let's Connect</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ```

    </div>
    <!-- End Promo box -->


    <!-- End Promo box -->
@endsection
