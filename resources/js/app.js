import '../css/app.css';

import {createApp, h} from "vue";
import {createInertiaApp, Head, Link} from "@inertiajs/inertia-vue3";
import {InertiaProgress} from "@inertiajs/progress";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import {ZiggyVue} from '../../vendor/tightenco/ziggy/dist/vue.m';
import Layout from "../views/Layouts/Layout.vue";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    resolve: name => {
        const page = resolvePageComponent(
            `../views/Pages/${name}.vue`,
            import.meta.glob('../views/Pages/**/*.vue')
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
    title: title => title ? `${title} - ${appName}` : `${appName}`
});

InertiaProgress.init({
    delay: 100,
    color: 'red',
    includeCSS: true,
    showSpinner: false
});
