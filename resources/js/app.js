import './bootstrap';
import '../css/app.css';

import {createApp, h} from "vue";
import {createInertiaApp, Head, Link} from "@inertiajs/inertia-vue3";
import {InertiaProgress} from "@inertiajs/progress";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import {ZiggyVue} from '../../vendor/tightenco/ziggy/dist/vue.m';
import Layout from "./Layouts/Layout.vue";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    resolve: name => {
        const page = resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        );
        page.then((module) => {
            if (module.default.layout === undefined) {
                module.default.layout = Layout;
            }
        });
        return page;
    },
    setup({el, app, props, plugin}) {
        createApp({render: () => h(app, props)})
            .use(plugin)
            .component('Link', Link)
            .component('Head', Head)
            .use(ZiggyVue, Ziggy)
            .mount(el)
    },
    title: title => `${title}|${appName}`
});

InertiaProgress.init({color: 'red'});
