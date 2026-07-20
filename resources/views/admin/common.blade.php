<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title', 'Dashboard') — Orthrex Life Care</title>
    <meta name="description" content="Orthrex Life Care Admin Panel" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin_css/assets/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin_css/assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_css/assets/vendor/css/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_css/assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin_css/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin_css/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="{{ asset('admin_css/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('admin_css/assets/js/config.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ============================================================
         THEME COLOR (#BA8523) — active states, header, live clock
         ============================================================ -->
    <style>
        :root {
            --theme-color: #BA8523;
            --theme-color-light: #d9a53f;
            --theme-color-dark: #8f6519;
            --theme-color-soft: rgba(186, 133, 35, 0.12);
            --theme-color-softer: rgba(186, 133, 35, 0.06);
            --radius-lg: 14px;
            --radius-md: 10px;
            --radius-sm: 8px;
            --radius-pill: 30px;
        }

        /* ---------- SIDEBAR ---------- */
        #layout-menu {
            border-radius: 0 var(--radius-lg) var(--radius-lg) 0;
            box-shadow: 0 0 24px rgba(0, 0, 0, 0.06);
        }

        #layout-menu .app-brand {
            padding: 1rem 1rem .5rem;
        }

        #layout-menu .menu-inner {
            padding: .5rem .75rem 2rem;
        }

        #layout-menu .menu-item {
            margin-bottom: 3px;
        }

        #layout-menu .menu-link {
            border-radius: var(--radius-md);
            padding: .65rem .9rem;
            transition: background .2s ease, color .2s ease, transform .15s ease;
        }

        #layout-menu .menu-link:hover {
            background: var(--theme-color-soft);
            color: var(--theme-color-dark);
            transform: translateX(2px);
        }

        #layout-menu .menu-link:hover .menu-icon {
            color: var(--theme-color-dark);
        }

        /* Active menu item — solid theme color */
        #layout-menu .menu-item.active>.menu-link {
            background: var(--theme-color) !important;
            color: #fff !important;
            box-shadow: 0 4px 12px rgba(186, 133, 35, 0.35);
        }

        #layout-menu .menu-item.active>.menu-link .menu-icon,
        #layout-menu .menu-item.active>.menu-link div {
            color: #fff !important;
        }

        /* Active parent (dropdown) that is open but sub-item is active */
        #layout-menu .menu-item.open>.menu-link {
            background: var(--theme-color-soft);
            color: var(--theme-color-dark);
        }

        #layout-menu .menu-item.open>.menu-link .menu-icon {
            color: var(--theme-color-dark);
        }

        /* Sub menu */
        #layout-menu .menu-sub {
            border-radius: var(--radius-md);
            margin: 3px 0 6px 0;
            padding: 4px;
            background: var(--theme-color-softer);
        }

        #layout-menu .menu-sub .menu-link {
            padding-left: 2.6rem;
            font-size: .85rem;
            border-radius: var(--radius-sm);
        }

        #layout-menu .menu-sub .menu-item.active>.menu-link {
            background: var(--theme-color) !important;
            color: #fff !important;
        }

        #layout-menu .menu-toggle::after {
            transition: transform .2s ease;
        }

        /* ---------- HEADER / NAVBAR ---------- */
        #layout-navbar {
            border-radius: 0 0 var(--radius-lg) var(--radius-lg);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            padding-top: .6rem;
            padding-bottom: .6rem;
        }

        .navbar-datetime {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: .82rem;
            font-weight: 600;
            padding: .45rem 1rem;
            border-radius: var(--radius-pill);
            background: var(--theme-color-soft);
            color: var(--theme-color-dark);
            white-space: nowrap;
        }

        .navbar-datetime i {
            font-size: 1rem;
            color: var(--theme-color);
        }

        .navbar-datetime .dt-divider {
            opacity: .4;
            margin: 0 4px;
        }

        .navbar-datetime .dt-tz {
            font-size: .7rem;
            font-weight: 500;
            opacity: .75;
            margin-left: 4px;
        }

        #liveTime {
            font-variant-numeric: tabular-nums;
            min-width: 78px;
            display: inline-block;
        }

        /* Avatar ring in theme color */
        .dropdown-user .avatar img {
            border-radius: 50%;
            box-shadow: 0 0 0 3px var(--theme-color-soft), 0 2px 6px rgba(0, 0, 0, .15);
        }

        .dropdown-menu {
            border-radius: var(--radius-md);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .12);
        }

        .dropdown-item {
            border-radius: var(--radius-sm);
            margin: 2px 4px;
            width: calc(100% - 8px);
        }

        .dropdown-item:hover,
        .dropdown-item:active {
            background: var(--theme-color-soft) !important;
            color: var(--theme-color-dark) !important;
        }

        /* ---------- Buttons (optional: keep primary buttons on theme) ---------- */
        .btn-primary {
            background-color: var(--theme-color) !important;
            border-color: var(--theme-color) !important;
        }

        .btn-primary:hover {
            background-color: var(--theme-color-dark) !important;
            border-color: var(--theme-color-dark) !important;
        }

        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 991.98px) {
            #layout-navbar {
                border-radius: 0;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-datetime {
                font-size: .74rem;
                padding: .35rem .7rem;
            }

            .navbar-datetime .dt-tz {
                display: none;
            }
        }

        @media (max-width: 575.98px) {
            #layout-menu {
                border-radius: 0;
            }

            .navbar-datetime .dt-divider,
            .navbar-datetime span:not(#liveTime):not(#liveDate) {
                display: none;
            }
        }


        .app-brand.demo {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 16px;
            overflow: visible;
            /* container e image ne kapse nahi */
        }

        .app-brand-link {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            width: 100%;
        }

        .app-brand-logo-img {
            max-width: 41%;
            /* sidebar box thi bahar na jay */
            height: auto;
            object-fit: contain;
            /* logo distort na thay */
            display: block;

        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('dashboard') }}"
                        class="app-brand-link d-flex justify-content-center align-items-center w-100">
                        <img src="{{ asset('assets/images/orthrex-logo.png') }}" alt="logo" class="app-brand-logo-img">
                    </a>
                    <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-smile"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-item {{ request()->is('slider*') ? 'active' : '' }}">
                        <a href="{{ route('slider-list') }}" class="menu-link">
                            <i class='bxr bx-images menu-icon tf-icons'></i>
                            <div data-i18n="Analytics">Home Slider</div>
                        </a>
                    </li>

                    <li class="menu-item {{ request()->is('about*') ? 'active' : '' }}">
                        <a href="{{ route('about') }}" class="menu-link">
                            <i class='bxr bx-building-house menu-icon tf-icons'></i>
                            <div data-i18n="Analytics">About Us</div>
                        </a>
                    </li>


                    <li class="menu-item {{ request()->is('category*') ? 'active' : '' }}">
                        <a href="{{ route('category-list') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-category'></i>
                            <div data-i18n="Analytics">Category</div>
                        </a>
                    </li>


                    <li class="menu-item {{ request()->is('product*') ? 'active' : '' }}">
                        <a href="{{ route('product-list') }}" class="menu-link">
                            <i class='menu-icon tf-icons bx bx-package'></i>
                            <div data-i18n="Analytics">Products</div>
                        </a>
                    </li>


                    <li class="menu-item {{ request()->is('surgeon-corner*') ? 'active' : '' }}">
                        <a href="{{ route('surgeon-corner-list') }}" class="menu-link">
                            <i class='bxr bx-star menu-icon tf-icons'></i>
                            <div data-i18n="Analytics">Surgeon Corner</div>
                        </a>
                    </li>

                    <li class="menu-item {{ request()->is('quality*') ? 'active' : '' }}">
                        <a href="{{ route('quality-list') }}" class="menu-link">
                            <i class='bxr bx-shield menu-icon tf-icons'></i>
                            <div data-i18n="Analytics">Quality</div>
                        </a>
                    </li>

                    <li class="menu-item {{ request()->is('contact*') ? 'active' : '' }}">
                        <a href="{{ route('contact') }}" class="menu-link">
                            <i class='bxr bx-envelope menu-icon tf-icons'></i>
                            <div data-i18n="Analytics">Contact</div>
                        </a>
                    </li>

                    <!-- Logout Button directly below Contact -->
                    <li class="menu-item">
                        <a href="{{ route('logout') }}" class="menu-link "
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class='menu-icon tf-icons bx bx-power-off'></i>
                            <div class="fw-semibold">Log Out</div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>

            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-between w-100"
                        id="navbar-collapse">
                        <!-- Welcome Admin Message -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <span class="fw-bold fs-5 text-dark">Welcome <span
                                        style="color: var(--theme-color-dark);">Admin</span></span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center ms-auto gap-3">
                            <!-- Live Date & Time — Asia/Kolkata (IST) -->
                            <div class="navbar-datetime">
                                <i class='bx bx-calendar'></i>
                                <span id="liveDate">--</span>
                                <span class="dt-divider">|</span>
                                <i class='bx bx-time-five'></i>
                                <span id="liveTime">--:--:--</span>
                                <span class="dt-tz">IST</span>
                            </div>

                            <!-- Logged-in User Name (Replaces avatar image) -->
                            <div
                                class="user-name-display d-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-light border ms-2">
                                <i class='bx bx-user-circle fs-4' style="color: var(--theme-color);"></i>
                                <span
                                    class="fw-semibold text-dark text-capitalize">{{ Auth::user()->name ?? 'Admin' }}</span>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <script>
        // Live Date & Time — always shown in Asia/Kolkata (IST), regardless of server/browser timezone
        function updateLiveDateTime() {
            const now = new Date();

            const dateOptions = {
                day: '2-digit',
                month: 'short',
                year: 'numeric',
                timeZone: 'Asia/Kolkata'
            };
            const dateStr = now.toLocaleDateString('en-GB', dateOptions);

            const timeOptions = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true,
                timeZone: 'Asia/Kolkata'
            };
            const timeStr = now.toLocaleTimeString('en-US', timeOptions);

            document.getElementById('liveDate').textContent = dateStr;
            document.getElementById('liveTime').textContent = timeStr;
        }

        updateLiveDateTime();
        setInterval(updateLiveDateTime, 1000);
    </script>

    <!-- Core JS -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        function confirmDelete(event, url) {
            event.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }

        setTimeout(() => {
            const el = document.getElementById('custom-alert');
            if (el) el.style.display = "none";
        }, 5000);
    </script>

    <script src="{{ asset('admin_css/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin_css/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin_css/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin_css/assets/vendor/js/menu.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('admin_css/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('admin_css/assets/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('admin_css/assets/js/dashboards-analytics.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>