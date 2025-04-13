import './bootstrap';
import { createApp } from 'vue';


import '../static/sass/app.scss';

import CountriesComponent from './components/dashboard/Countries.vue';
import CountryComponent from './components/dashboard/Country.vue';
import CountryPartComponent from './components/dashboard/CountryPart.vue';
import CountryPartDestinationComponent from './components/dashboard/CountryPartDestination.vue';



const app = createApp({});

app.component('CountriesComponent', CountriesComponent);
app.component('CountryComponent', CountryComponent);
app.component('CountryPartComponent', CountryPartComponent);
app.component('CountryPartDestinationComponent', CountryPartDestinationComponent);
app.mount('#app');

