<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Tiết Nhật Hưng">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/core/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/core/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/core/assets/favicon/favicon-96x96.png">
    <link rel="manifest" href="/core/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="core/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="{{asset("core/css/style.css")}}" rel="stylesheet">
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-118965717-3');
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="/core/assets/brandcoreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="/core/assets/brandcoreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/index.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg>
                Dashboard<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-title">Theme</li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/colors.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
                </svg>
                Colors</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/typography.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                </svg>
                Typography</a></li>
        <li class="c-sidebar-nav-title">Components</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg>
                Base</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/breadcrumb.html"><span
                            class="c-sidebar-nav-icon"></span> Breadcrumb</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/cards.html"><span
                            class="c-sidebar-nav-icon"></span> Cards</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/carousel.html"><span
                            class="c-sidebar-nav-icon"></span> Carousel</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/collapse.html"><span
                            class="c-sidebar-nav-icon"></span> Collapse</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/forms.html"><span
                            class="c-sidebar-nav-icon"></span> Forms</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/jumbotron.html"><span
                            class="c-sidebar-nav-icon"></span> Jumbotron</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/list-group.html"><span
                            class="c-sidebar-nav-icon"></span> List group</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/navs.html"><span
                            class="c-sidebar-nav-icon"></span> Navs</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/pagination.html"><span
                            class="c-sidebar-nav-icon"></span> Pagination</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/popovers.html"><span
                            class="c-sidebar-nav-icon"></span> Popovers</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/progress.html"><span
                            class="c-sidebar-nav-icon"></span> Progress</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/scrollspy.html"><span
                            class="c-sidebar-nav-icon"></span> Scrollspy</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/switches.html"><span
                            class="c-sidebar-nav-icon"></span> Switches</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/tables.html"><span
                            class="c-sidebar-nav-icon"></span> Tables</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/tabs.html"><span
                            class="c-sidebar-nav-icon"></span> Tabs</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/base/tooltips.html"><span
                            class="c-sidebar-nav-icon"></span> Tooltips</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                </svg>
                Buttons</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/buttons/buttons.html"><span
                            class="c-sidebar-nav-icon"></span> Buttons</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                                                  href="/core/buttons/button-group.html"><span
                            class="c-sidebar-nav-icon"></span> Buttons Group</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/buttons/dropdowns.html"><span
                            class="c-sidebar-nav-icon"></span> Dropdowns</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                                                  href="/core/buttons/brand-buttons.html"><span
                            class="c-sidebar-nav-icon"></span> Brand Buttons</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/charts.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                </svg>
                Charts</a></li>
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                </svg>
                Icons</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/iconscoreui-icons-free.html">
                        CoreUI
                        Icons<span class="badge badge-success">Free</span></a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/iconscoreui-icons-brand.html">
                        CoreUI Icons - Brand</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/iconscoreui-icons-flag.html">
                        CoreUI
                        Icons - Flag</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg>
                Notifications</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                                                  href="/core/notifications/alerts.html"><span
                            class="c-sidebar-nav-icon"></span> Alerts</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/notifications/badge.html"><span
                            class="c-sidebar-nav-icon"></span> Badge</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                                                  href="/core/notifications/modals.html"><span
                            class="c-sidebar-nav-icon"></span> Modals</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/widgets.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                </svg>
                Widgets<span class="badge badge-info">NEW</span></a></li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Extras</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                </svg>
                Pages</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/login.html" target="_top">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg>
                        Login</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/register.html" target="_top">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg>
                        Register</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/404.html" target="_top">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                        </svg>
                        Error 404</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/core/500.html" target="_top">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                        </svg>
                        Error 500</a></li>
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>

<div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button>
        <a class="c-header-brand d-lg-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="/core/assets/brandcoreui.svg#full"></use>
            </svg>
        </a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                      role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="/core/assets/img/avatars/6.jpg"
                                               alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg>
                        Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item"
                                                                                      href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg>
                        Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item"
                                                                                          href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                        </svg>
                        Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item"
                                                                                      href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                        </svg>
                        Comments<span class="badge badge-warning ml-auto">42</span></a>
                    <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg>
                        Profile</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg>
                        Settings</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                        </svg>
                        Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item"
                                                                                            href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                        </svg>
                        Projects<span class="badge badge-primary ml-auto">42</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg>
                        Lock Account</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="/core/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg>
                        Logout</a>
                </div>
            </li>
        </ul>
        <div class="c-subheader px-3">
            <!-- Breadcrumb-->
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <!-- Breadcrumb Menu-->
            </ol>
        </div>
    </header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">

                </div>
            </div>
        </main>
        <footer class="c-footer">
            <div><a href="/core/https:/coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="/core/https:/coreui.io/">CoreUI</a></div>
        </footer>
    </div>
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="{{asset("core/vendors/@coreui/coreui/js/coreui.bundle.min.js")}}"></script>
<script src="{{asset("core/vendors/@coreui/icons/js/svgxuse.min.js")}}"></script>
<script src="{{asset("core/vendors/@coreui/utils/js/coreui-utils.js")}}"></script>
{{--<script src="/core/js/main.js"></script>--}}
</body>
</html>
