<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- InstanceBeginEditable name="doctitle" -->
    <title>{{ t('Orthrex Life Care - Manufacturer of Orthopaedic Solutions') }}</title>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <meta name="description" content="{{ t('Orthrex Life Care - Manufacturer of Orthopaedic Solutions') }}" />
    <meta name="keywords" content="{{ t('Orthrex Life Care - Manufacturer of Orthopaedic Solutions') }}" />
    <meta property="og:title" content="{{ t('Orthrex Life Care - Manufacturer of Orthopaedic Solutions') }}">
    <meta property="og:description" content="{{ t('Orthrex Life Care - Manufacturer of Orthopaedic Solutions') }}">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <!-- InstanceEndEditable -->

    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Third-Party: Real Flag Icons CDN (no install needed) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icons/7.2.3/css/flag-icons.min.css">

    <!-- Language Dropdown Custom CSS -->
    <style>
        .lang-switcher {
            position: relative;
            display: inline-block;
            margin-left: 15px;
        }

        .lang-switcher__btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 7px 12px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s ease;
            color: #222;
        }

        .lang-switcher__btn:hover {
            border-color: #bbb;
            background: #f9f9f9;
        }

        .lang-switcher__btn .fi {
            font-size: 18px;
            border-radius: 3px;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
        }

        .lang-switcher__arrow {
            font-size: 10px;
            margin-left: 2px;
            transition: transform 0.2s ease;
        }

        .lang-switcher.active .lang-switcher__arrow {
            transform: rotate(180deg);
        }

        .lang-switcher__menu {
            display: none;
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            min-width: 200px;
            max-height: 320px;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            z-index: 9999;
            padding: 6px;
        }

        .lang-switcher.active .lang-switcher__menu {
            display: block;
        }

        .lang-switcher__item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 12px;
            border-radius: 6px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            transition: background 0.15s ease;
        }

        .lang-switcher__item:hover {
            background: #f2f2f2;
            color: #000;
        }

        .lang-switcher__item.is-selected {
            background: #eef3ff;
            font-weight: 600;
        }

        .lang-switcher__item .fi {
            font-size: 18px;
            border-radius: 3px;
            flex-shrink: 0;
        }

        /* Responsive - Mobile */
        @media (max-width: 991px) {
            .lang-switcher {
                margin-left: 0;
                margin-right: 10px;
            }

            .lang-switcher__btn {
                padding: 6px 9px;
                font-size: 13px;
            }

            .lang-switcher__menu {
                right: 0;
                left: auto;
                min-width: 180px;
            }
        }

        @media (max-width: 480px) {
            .lang-switcher__btn span.lang-switcher__label {
                display: none;
            }

            .lang-switcher__btn {
                padding: 6px 8px;
            }
        }

        /* Floating WhatsApp Button */
        .whatsapp-float-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 55px;
            height: 55px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 32px;
            box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.25);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whatsapp-float-btn:hover {
            background-color: #1eb854;
            color: #fff;
            transform: scale(1.08);
            box-shadow: 2px 6px 16px rgba(37, 211, 102, 0.45);
        }

        /* Sticky Header on Scroll */
        header {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="header-container">
            <div class="hero-container">
                <nav class="navbar navbar-expand-lg">
                    <div class="navbar-nav-container">
                        <!-- Logo Container -->
                        <div class="image-container navbar-logo-container">
                            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/orthrex-logo.png') }}" alt="Orthrex Life Care"
                                    class="img-fluid">
                            </a>
                        </div>
                        <!-- Nav Link Container -->
                        <div class="nav-link-container">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('home') }}">{{ t('Home') }}</a></li>

                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('about-us') }}">{{ t('About Us') }}</a></li>

                                    @php
                                        $categories = App\Models\Category::all();
                                    @endphp

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ t('Products') }} <i class="fa-solid fa-chevron-down"></i>
                                        </a>

                                        <ul class="dropdown-menu">

                                            @foreach ($categories as $category)
                                                @php
                                                    $productCount = App\Models\Product::where(
                                                        'category_id',
                                                        $category->id,
                                                    )->count();
                                                @endphp


                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{route('products-data', $category->id)}}">
                                                        {{ t($category->title) }}
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="{{ route('quality') }}">{{ t('Quality') }}</a></li>

                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('Surgeon-corner') }}">{{ t('Surgeon Corner') }}</a></li>

                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('contact-us') }}">{{ t('Contact Us') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ================= Language Switcher Dropdown (Self-contained, no config file needed) ================= -->
                        @php
                            // Languages list yaha j define kari didhi che - koi alag config file ni jarur nathi
                            $langList = [
                                'en' => ['name' => 'English', 'flag' => 'fi-gb'],
                                'gu' => ['name' => 'ગુજરાતી', 'flag' => 'fi-in'],
                                'hi' => ['name' => 'हिन्दी', 'flag' => 'fi-in'],
                                'fr' => ['name' => 'Français', 'flag' => 'fi-fr'],
                                'es' => ['name' => 'Español', 'flag' => 'fi-es'],
                                'de' => ['name' => 'Deutsch', 'flag' => 'fi-de'],
                                'ar' => ['name' => 'العربية', 'flag' => 'fi-sa'],
                                'zh' => ['name' => '中文', 'flag' => 'fi-cn'],
                                'ja' => ['name' => '日本語', 'flag' => 'fi-jp'],
                                'pt' => ['name' => 'Português', 'flag' => 'fi-pt'],
                                'ru' => ['name' => 'Русский', 'flag' => 'fi-ru'],
                                'it' => ['name' => 'Italiano', 'flag' => 'fi-it'],
                            ];

                            $currentLocale = session('site_locale', 'en');
                            $currentLang = $langList[$currentLocale] ?? $langList['en'];
                        @endphp

                        <div class="lang-switcher" id="langSwitcher">
                            <button type="button" class="lang-switcher__btn" id="langSwitcherBtn">
                                <span class="fi {{ $currentLang['flag'] }}"></span>
                                <span class="lang-switcher__label">{{ $currentLang['name'] }}</span>
                                <span class="lang-switcher__arrow">▼</span>
                            </button>

                            <div class="lang-switcher__menu" id="langSwitcherMenu">
                                @foreach($langList as $code => $lang)
                                    <a href="{{ url('/lang/' . $code) }}"
                                        class="lang-switcher__item {{ $code === $currentLocale ? 'is-selected' : '' }}">
                                        <span class="fi {{ $lang['flag'] }}"></span>
                                        <span>{{ $lang['name'] }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <!-- ================= /Language Switcher Dropdown ================= -->

                        <button class="nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Sidebar Section -->
    <aside>
        <div class="sidebar-overlay"></div>
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="image-container sidebar-logo">
                    <img src="{{ asset('assets/images/orthrex-logo-white.png') }}" alt="Orthrex Life Care">
                </div>
                <button class="sidebar-close-btn"><span>X</span></button>
            </div>

            <ul class="sidebar-menu">
                <li><a href="{{ route('home') }}">{{ t('Home') }}</a></li>

                <li><a href="{{ route('about-us') }}">{{ t('About Us') }}</a></li>

                <li class="sidebar-dropdown">
                    <div class="dropdown-header"><a href="#">{{ t('Products') }}</a><button
                            class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button></div>
                    @php
                        $categories = App\Models\Category::all();
                    @endphp

                    <ul class="sidebar-dropdown-menu">
                        @foreach ($categories as $category)
                            @php
                                $productCount = App\Models\Product::where(
                                    'category_id',
                                    $category->id,
                                )->count();
                            @endphp

                            <li><a href="{{route('products-data', $category->id)}}">{{ t($category->title) }}</a></li>

                        @endforeach
                    </ul>
                </li>

                <li><a href="{{ route('quality') }}">{{ t('Quality') }}</a></li>

                <li><a href="{{ route('Surgeon-corner') }}">{{ t('Surgeon Corner') }}</a></li>

                <li><a href="{{ route('contact-us') }}">{{ t('Contact Us') }}</a></li>
            </ul>
        </div>
    </aside>

    <!-- Main Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-banner">
            <div class="hero-container">
                <div class="footer__container">
                    <div class="footer__col footer__col--quick-links">
                        <h5>{{ t('Quick Links') }}</h5>
                        <ul class="footer__list">
                            <li><a href="{{ route('home') }}" class="footer__link-text">{{ t('Home') }}</a></li>
                            <li><a href="{{ route('about-us') }}" class="footer__link-text">{{ t('About Us') }}</a></li>
                            <li><a href="{{ route('products-data', 1) }}"
                                    class="footer__link-text">{{ t('Products') }}</a></li>
                            <li><a href="{{ route('quality') }}" class="footer__link-text">{{ t('Quality') }}</a></li>
                            <li><a href="{{ route('Surgeon-corner') }}" class="footer__link-text">{{ t('Surgeon Corner') }}</a></li>
                            <li><a href="{{ route('contact-us') }}" class="footer__link-text">{{ t('Contact Us') }}</a>
                            </li>
                        </ul>
                    </div>

                    @php
                        $categories = App\Models\Category::all();
                    @endphp

                    <div class="footer__col footer__col--useful-links">
                        <h5>{{ t('Products') }}</h5>

                        <ul class="footer__list">

                            @foreach ($categories as $category)
                                @php
                                    $productCount = App\Models\Product::where('category_id', $category->id)->count();
                                @endphp

                                <li>
                                    <a href="{{  route('products-data', $category->id)}}" class="footer__link-text">
                                        {{ t($category->title) }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    @php
                        $contact = \App\Models\Contact::first();
                    @endphp
                    <div class="footer__col footer__col--newsletter">
                        <h5>{{ t('Contact Us') }}</h5>
                        <div class="footer__social-media">
                            <img src="{{ asset('assets/images/icons/footer-location.svg') }}" alt="Location">
                            <span>{{$contact->main_building}}</span>
                        </div>
                        <div class="footer__social-media">
                            <img src="{{ asset('assets/images/icons/footer-call.svg') }}" alt="Call">
                            <span>{{ $contact->number }}</span>
                        </div>
                        <div class="footer__social-media">
                            <img src="{{ asset('assets/images/icons/footer-email.svg') }}" alt="Email">
                            <span>{{ $contact->email }}</span>
                        </div>
                    </div>

                    <div class="footer__col footer__col--intro">
                        <h5>{{ t('Locate Us') }}</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.49957637349428!2d72.74431931609362!3d21.192428215882668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d007ef9f415%3A0x21c24dfe509105f3!2sORTHREX%20LIFE%20CARE!5e0!3m2!1sen!2sin!4v1781087825837!5m2!1sen!2sin"
                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="footer__col footer__col-copyright">
                        <p class="m-0">{{ t('© 2026. All Rights Reserved By Orthrex Life Care.') }}</p>
                        <p class="m-0">{{ t('Designed & Developed By :') }} <a href="https://www.desirationhub.com"
                                target="_blank">Desiration Hub</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/video-embedded.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-script.js') }}"></script>

    <!-- Language Switcher Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const switcher = document.getElementById('langSwitcher');
            const btn = document.getElementById('langSwitcherBtn');

            if (btn) {
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    switcher.classList.toggle('active');
                });
            }

            document.addEventListener('click', function (e) {
                if (switcher && !switcher.contains(e.target)) {
                    switcher.classList.remove('active');
                }
            });
        });
    </script>

    <!-- Floating WhatsApp Button -->
    @php
        $whatsappContact = \App\Models\Contact::first();
        $rawWhatsapp = $whatsappContact->whatsapp_number ?? $whatsappContact->number ?? '';
        $whatsappClean = preg_replace('/[^0-9]/', '', $rawWhatsapp);
    @endphp

    @if(!empty($whatsappClean))
        <a href="https://wa.me/{{ $whatsappClean }}" target="_blank" rel="noopener noreferrer" class="whatsapp-float-btn" title="Chat on WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    @endif
</body>
<!-- InstanceEnd -->

</html>