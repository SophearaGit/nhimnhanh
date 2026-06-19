<!-- Header
    ============================================= -->
<header>

    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav navbar-box navbar-default validnavs navbar-sticky">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container-xl">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>

        <!-- End Top Search -->
        <div class="container nav-box d-flex justify-content-between align-items-center">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('frontend/assets/img/ictLogo.jpg') }}" class="logo" alt="Logo">
                </a>
            </div>

            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <img src="{{ asset('frontend/assets/img/ictLogo.jpg') }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="{{ route('home') }}" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void;" onclick="setTheme('light'); return false;">Home Version
                                    Light</a></li>
                            <li><a href="javascript:void;" onclick="setTheme('dark'); return false;">Home Version
                                    Dark</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#resume">Resume</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#pricing">Pricing</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#contact">contact</a>
                    </li>
                </ul>
            </div> <!-- /.navbar-collapse -->
            <div class="nav-right">
                <div class="attr-right">

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav attr-box">
                        <ul>
                            {{-- <li class="lang-toggle">
                                <button onclick="toggleLanguage()" id="lang-btn"
                                    style="background: #111; border: none; cursor: pointer; font-size: 0.85rem; font-weight: 600; padding: 10px 16px; color: #fff; border-radius: 50px; display: flex; align-items: center; gap: 6px; line-height: 1; min-width: 60px; justify-content: center; position: relative;">
                                    <span id="lang-label">ខ្មែរ</span>
                                    <span id="lang-cooldown"></span>
                                </button>
                            </li> --}}
                            <li class="button">
                                <a class="smooth-menu" href="#contact">
                                    <span data-en="Let's Talk" data-km="តោះនិយាយ">Let's Talk</span>
                                    <i class="fas fa-comment-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- End Atribute Navigation -->
                </div>
            </div>
        </div>

        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>

        <!-- End Overlay screen for menu -->
    </nav>

    <!-- End Navigation -->
</header>

<!-- End Header -->
