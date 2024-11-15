import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Metronic from "@/Layouts/Metronic.vue";

import {ServerTable, ClientTable} from 'v-tables-3';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import Notifications from '@kyvg/vue3-notification'

import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import FrontLayout from "@/Layouts/FrontLayout.vue";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    // resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    resolve: (name) => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        );
        page.then((module) => {
            module.default.layout = FrontLayout;
        });
        return page;
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(ServerTable)
            .use(ClientTable)
            .use(VueSweetalert2)
            .use(Notifications)
            .use(ElementPlus)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
