import "./bootstrap";
import "../css/app.css";
import NProgress from "nprogress";
import { createApp, h } from "vue";
import { createInertiaApp, router } from "@inertiajs/vue3";
import Layout from "./Pages/layout/Layout.vue";

router.on("start", () => NProgress.start());
createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
router.on("finish", () => NProgress.done());
