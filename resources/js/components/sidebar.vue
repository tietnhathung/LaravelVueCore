<template>
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
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="/core/base/breadcrumb.html">
                                <span class="c-sidebar-nav-icon"></span> Breadcrumb
                            </a>
                        </li>
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
            <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
        </div>
</template>
<script>
export default {
    name: "vSidebar"
}
</script>
