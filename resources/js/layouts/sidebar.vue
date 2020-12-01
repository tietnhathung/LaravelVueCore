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
                <template v-for="(menu,key,index) in menus" >
                    <li class="c-sidebar-nav-item" v-if="menu.type">
                        <router-link class="c-sidebar-nav-link" v-bind:to="menu.url">
                            <i v-bind:class="['c-sidebar-nav-icon', menu.icon]" ></i>
                            {{menu.name}}
                        </router-link>
                    </li>
                    <li class="c-sidebar-nav-title" v-else>
                        {{menu.name}}
                    </li>
                </template>
            </ul>
            <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
        </div>
</template>
<script>
export default {
    name: "vSidebar",
    data: function (){
        return {
            menus : [
                {
                    name:"Dashboard",
                    type: 1,
                    url : "/",
                    icon : "fas fa-tachometer-alt"
                },
                {
                    name:"System management",
                    type: 0,
                    url : "#",
                    icon : ""
                },
                {
                    name:"Users",
                    type: 1,
                    url : "/users",
                    icon : "fas fa-users"
                }
            ]
        }
    }
}
</script>
