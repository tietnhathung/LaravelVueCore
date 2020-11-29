<template>
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
            <div class="c-sidebar-brand d-lg-down-none">
                <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="core/vendors/@coreui/icons/svg/flag/cif-VN.svg"></use>
                </svg>
                <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                    <use xlink:href="core/vendors/@coreui/icons/svg/flag/cif-VN.svg"></use>
                </svg>
            </div>
            <ul class="c-sidebar-nav">
                <li class="c-sidebar-nav-item">
                    <router-link class="c-sidebar-nav-link" to="/foo">
                        <i class="c-sidebar-nav-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </router-link>
                </li>
                <li class="c-sidebar-nav-title">Theme</li>
                <li class="c-sidebar-nav-item">
                    <router-link class="c-sidebar-nav-link" to="/users">
                        <i class="c-sidebar-nav-icon fas fa-users"></i>
                        Dashboard
                    </router-link>
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
