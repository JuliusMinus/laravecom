import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import AddToCart from './components/AddToCart.vue';



window.Alpine = Alpine;

Alpine.start();

const app = createApp();


app
    .component('AddToCart', AddToCart)
    .component('NavbarCart', NavbarCart)
    .component('ShoppingCart', ShoppingCart)
    .component('Checkout', Checkout)

app.mount('#app');