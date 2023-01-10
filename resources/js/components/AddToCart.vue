<template>
    <div class="flex items-center justify-between py-4">
        <button
            class="focus:outline-none text-white rounded-md cursor-pointer text-xs font-semibold px-3 py-2 bg-indigo-700"
            v-on:click.prevent="addToCart"
        >
            Ajouter au panier
        </button>
    </div>
</template>

<script setup>
   
import useProduct from '../composables/products';
import emitter from 'tiny-emitter';

    const { add } = useProduct();
    const productId = defineProps(['productId']);
 
  
    
  
    
   

    const addToCart = async () => {
        await axios.get('/sanctum/csrf-cookie')
        await axios.get('/api/user')
            .then(async (res) => {
                let cartCount = await add(productId);
                emitter('cartCountUpdated', cartCount);
              
            })
            .catch(err => console.log(err));
    }

    
</script>