require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import HomeHead from "@/Components/Shared/HomeHead.vue";
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import HomeIndex from "@/Components/Shared/HomeIndex.vue";
import TextField from "@/Components/Form/TextField.vue";
import SelectOptionField from "@/Components/Form/SelectOptionField.vue";
import RequestHead from "@/Components/Shared/RequestHead.vue";
import ImageField from "@/Components/Form/ImageField.vue";
import ProfileTextField from "@/Components/Form/ProfileTextField.vue";
import SubjectCreateTextField from "@/Components/Form/SubjectCreateTextField.vue";
import DescriptionTextField from "@/Components/Form/DescriptionTextField.vue";
import BlogDescriptionTextField from "@/Components/Form/BlogDescriptionTextField.vue";
import ProviderIndex from "@/Components/Shared/ProviderIndex.vue";
import SellerHead from "@/Components/Shared/SellerHead.vue";
import SellerIndex from "@/Components/Shared/SellerIndex.vue";
import IndexHead from "@/Components/Shared/IndexHead.vue";
import RequestMenubar from "@/Components/Shared/RequestMenubar.vue";
import Requestindex from "@/Components/Shared/Requestindex.vue";
import SideMenuBar from "@/Components/Shared/SideMenuBar.vue";
import Heading from "@/Components/Shared/Heading.vue";
import HeadingMcqs from "@/Components/Shared/HeadingMcqs.vue";
import HeadingBlogs from "@/Components/Shared/HeadingBlogs.vue";
import BlogsHead from "@/Components/Shared/BlogsHead.vue";
import Accordion from "@/Components/Shared/Accordion.vue";
import LoginTextField from "@/Components/Form/LoginTextField.vue";
import LoginFormButton from "@/Components/Form/LoginFormButton.vue";
import FormButton from "@/Components/Form/FormButton.vue";
import Notifications from "@/Components/Shared/Notifications.vue";
import { XIcon } from "@heroicons/vue/outline";
import CKEditor from '@ckeditor/ckeditor5-vue';
import { ref } from "vue";

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin, Maska }) {
        return createApp({ render: () => h(app, props) })
            .use(Maska)
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .component('HomeHead', HomeHead)
            .component('BreezeAuthenticatedLayout', BreezeAuthenticatedLayout)
            .component('Link', Link)
            .component('Head', Head)
            .component('LoginTextField', LoginTextField)
            .component('DescriptionTextField', DescriptionTextField)
            .component('HomeIndex', HomeIndex)
            .component('TextField', TextField)
            .component('SelectOptionField', SelectOptionField)
            .component('RequestHead', RequestHead)
            .component('ImageField', ImageField)
            .component('ProfileTextField', ProfileTextField)
            .component('DescriptionTextField', DescriptionTextField)
            .component('BlogDescriptionTextField', BlogDescriptionTextField)
            .component('ProviderIndex', ProviderIndex)
            .component('SellerHead', SellerHead)
            .component('SellerIndex', SellerIndex)
            .component('IndexHead', IndexHead)
            .component('RequestMenubar', RequestMenubar)
            .component('Requestindex', Requestindex)
            .component('SideMenuBar', SideMenuBar)
            .component('Heading', Heading)
            .component('SubjectCreateTextField', SubjectCreateTextField)
            .component('HeadingMcqs', HeadingMcqs)
            .component('HeadingBlogs', HeadingBlogs)
            .component('BlogsHead', BlogsHead)
            .component('Accordion', Accordion)
            .component('LoginFormButton', LoginFormButton)
            .component('FormButton', FormButton)
            .component('Notifications', Notifications)
            .component('XIcon', XIcon)
            .use( CKEditor )
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
