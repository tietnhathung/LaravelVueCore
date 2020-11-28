<template>
    <div class="c-app">
        <vSiderBar />
        <vBody />
    </div>
</template>
<script>
import vSiderBar from './sidebar';
import vBody from './body';
export default{
    components:{
        vSiderBar,
        vBody
    }
}
</script>
