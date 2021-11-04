require('./bootstrap');

import { createApp } from 'vue';

import RplFormComponent from './components/RplFormComponent.vue';

const app = createApp({})

app.component('rpl-form-component', RplFormComponent);

app.mount('#app')
