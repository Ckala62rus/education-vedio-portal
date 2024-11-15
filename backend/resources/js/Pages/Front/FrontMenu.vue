<template>
    <div class="head-nav">
        <span class="menu"> </span>
        <ul class="cl-effect-1">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Services</a></li>
            <li><Link :href="route('front.index')" target="_blank">Blog</Link></li>
            <li><a href="404.html">Shortcodes</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="contact.html">Contact</a></li>
            <div class="clearfix"></div>
        </ul>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
export default {
    name: "FrontMenu",
    components: {
        Link
    },
}
</script>

<style scoped>

</style>
