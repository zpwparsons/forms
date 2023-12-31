import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { plugin as formKitPlugin, defaultConfig as defaultFormKitConfig } from '@formkit/vue'
import formKitConfig from "../../formkit.config.js";
import Vueform from '@vueform/vueform'
import vueformConfig from './../../vueform.config'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(formKitPlugin, defaultFormKitConfig(formKitConfig))
            .use(Vueform, vueformConfig)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
