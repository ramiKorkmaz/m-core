import './bootstrap';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { createPinia } from 'pinia';

import reveal from '@/directives/reveal'

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob('./pages/**/*.vue');

        return await pages[`./pages/${name}.vue`]();
    },

    setup({ el, App, props, plugin }) {
        const app = createApp({
            render: () => h(App, props),
        })

            app.directive('reveal', reveal)

            app.use(plugin)
            app.use(createPinia())

            app.mount(el);
    },
});
