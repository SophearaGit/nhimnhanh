<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Antux - Personal Portfolio Template">
    <title>@yield('page_title') - Nhanh Nhim Portfolio</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/ictLogo.jpg') }}" type="image/x-icon">
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .goog-te-banner-frame,
        #goog-te-banner-frame,
        .goog-te-menu-frame,
        .skiptranslate,
        .goog-te-balloon-frame,
        #goog-te-balloon-frame,
        .goog-tooltip,
        .goog-tooltip-content,
        .goog-te-ftab-float {
            display: none !important;
            visibility: hidden !important;
        }

        body {
            top: 0 !important;
            position: static !important;
        }

        body.translated-ltr,
        body.translated-rtl {
            margin-top: 0 !important;
            top: 0 !important;
        }

        /* Lang button cooldown style */
        #lang-btn.cooling {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }

        /* Cooldown timer badge */
        #lang-cooldown {
            display: none;
            position: absolute;
            top: -6px;
            right: -6px;
            background: #e53e3e;
            color: #fff;
            font-size: 10px;
            font-weight: 700;
            height: 18px;
            width: 18px;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            line-height: 1;
        }

        #lang-btn {
            position: relative;
        }
    </style>
    @stack('styles')
</head>

<body class="">
    {{-- Google Translate element (hidden) --}}
    <div id="google_translate_element" style="display:none"></div>
    @include('frontend.layouts.partials.header')
    @yield('content')
    @include('frontend.layouts.partials.footer')

    <!-- JS -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/typed.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Google Translate -->
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,km',
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        // ── Dark Mode ────────────────────────────────────────
        function setTheme(mode) {
            const body = document.body;
            const icon = document.getElementById('theme-icon');
            if (mode === 'dark') {
                body.classList.add('bg-dark');
                if (icon) icon.className = 'fas fa-sun';
                localStorage.setItem('theme', 'dark');
            } else {
                body.classList.remove('bg-dark');
                if (icon) icon.className = 'fas fa-moon';
                localStorage.setItem('theme', 'light');
            }
        }
        // Keep toggle button working too
        function toggleDarkMode() {
            const isDark = document.body.classList.contains('bg-dark');
            setTheme(isDark ? 'light' : 'dark');
        }
        // Apply saved preference on page load
        document.addEventListener('DOMContentLoaded', function() {
            if (localStorage.getItem('theme') === 'dark') {
                setTheme('dark');
            }
        });
        // ── Language Toggle ──────────────────────────────────
        let isKhmer = localStorage.getItem('lang') === 'km';
        let cooldownTimer = null;
        const COOLDOWN = 10; // seconds
        function startCooldown() {
            const btn = document.getElementById('lang-btn');
            const badge = document.getElementById('lang-cooldown');
            btn.classList.add('cooling');
            badge.style.display = 'flex';
            let remaining = COOLDOWN;
            badge.textContent = remaining;
            cooldownTimer = setInterval(() => {
                remaining--;
                badge.textContent = remaining;
                if (remaining <= 0) {
                    clearInterval(cooldownTimer);
                    cooldownTimer = null;
                    btn.classList.remove('cooling');
                    badge.style.display = 'none';
                }
            }, 1000);
        }

        function applyTranslation(lang) {
            // Wait for Google Translate widget to be ready
            const waitForSelect = setInterval(() => {
                const select = document.querySelector('.goog-te-combo');
                if (select) {
                    clearInterval(waitForSelect);
                    select.value = lang;
                    select.dispatchEvent(new Event('change'));
                    // Reinit Swiper after translate
                    setTimeout(() => {
                        document.querySelectorAll('.swiper').forEach(el => {
                            if (el.swiper) el.swiper.update();
                        });
                    }, 2000);
                }
            }, 200);
        }

        function toggleLanguage() {
            if (cooldownTimer) return; // still in cooldown
            const btn = document.getElementById('lang-label');
            if (!isKhmer) {
                applyTranslation('km');
                document.body.style.fontFamily = "'Battambang', sans-serif";
                btn.textContent = 'EN';
                localStorage.setItem('lang', 'km');
                isKhmer = true;
            } else {
                applyTranslation('en');
                document.body.style.fontFamily = '';
                btn.textContent = 'ខ្មែរ';
                localStorage.setItem('lang', 'en');
                isKhmer = false;
            }
            startCooldown();
        }
        // Re-apply saved language on page load
        window.addEventListener('load', function() {
            if (localStorage.getItem('lang') === 'km') {
                document.body.style.fontFamily = "'Battambang', sans-serif";
                const label = document.getElementById('lang-label');
                if (label) label.textContent = 'EN';
                applyTranslation('km');
            }
        });
        // Kill Google Translate injected UI continuously
        setInterval(() => {
            document.querySelectorAll(
                'iframe.goog-te-banner-frame, .goog-te-balloon-frame, .goog-tooltip'
            ).forEach(el => el.remove());
            if (document.body.style.top && document.body.style.top !== '0px') {
                document.body.style.top = '0px';
            }
        }, 300);
    </script>
    @stack('scripts')
</body>

</html>
