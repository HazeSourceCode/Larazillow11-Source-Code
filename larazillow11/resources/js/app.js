import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ZiggyVue } from 'ziggy'
import '../css/app.css'

createInertiaApp({
  resolve: async (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue');

    // Fixing the path
    const path = `./Pages/${name}.vue`;
    console.log('Resolving page:', path); // Add this for debugging
    
    if (!pages[path]) {
        console.error(`Page not found: ${path}`);
        throw new Error(`Page not found: ${path}`);
    }
    
    const page = await pages[path]();
    page.default.layout = page.default.layout || MainLayout;

    return page;
},
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(ZiggyVue)
            .use(plugin)
            .mount(el)
    },
})
