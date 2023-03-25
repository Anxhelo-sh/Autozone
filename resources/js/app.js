import { createApp } from 'vue';

import Home from "./components/Home";
import Nav from "./components/Navigation/Nav";

const app = createApp({});

app.component('home', Home);
app.component('top-nav', Nav);

app.mount('#app');
