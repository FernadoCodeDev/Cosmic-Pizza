<script setup lang="ts">
import DarkMode from '@/components/ui/DarkMode.vue';
import Cart from '@/assets/svg/Cart.vue';
import CosmicPizzaLogo from "../assets/img/CosmicPizzaLogo.webp"

</script>

<template>
    <div class=" w-full h-auto">

        <div class="grid grid-cols-2 bg-beige-200 p-4">

            <div class="">
                <DarkMode />
            </div>

            <div class="w-12 h-12 object-contain ms-auto">
                <cart />
            </div>

            <img :src="CosmicPizzaLogo" 
            alt="CosmicPizzaLogo" 
            class="w-40 h-auto cursor-pointer col-span-2 m-auto drop-shadow-xl/50" />

        </div>

    </div>
</template>