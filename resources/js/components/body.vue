<template>
    <div class="c-wrapper c-fixed-components">
        <vHeader />
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <router-view></router-view>
                    </div>
                </div>
            </main>
            <vFooter />
        </div>
    </div>
</template>
<script>
import vHeader from './header';
import vFooter from './footer';
export default {
    name: "vbody",
    components:{
        vHeader,
        vFooter
    }
}
</script>

<style scoped>

</style>
