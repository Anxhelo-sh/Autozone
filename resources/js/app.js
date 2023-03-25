import {createApp} from 'vue';
import store from './store'

import Toaster from '@meforma/vue-toaster';
import Home from "./components/Home";
import Nav from "./components/Navigation/Nav";
import Dashboard from "./components/Admin/Dashboard/Dashboard";

const app = createApp({})
    .use(Toaster, {
        position: "top",
    })
    .use(store);

app.component('home', Home);
app.component('top-nav', Nav);
app.component('dashboard', Dashboard);


app.mount('#app');
