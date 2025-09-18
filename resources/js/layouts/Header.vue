<script setup lang="ts">
import Cart from '@/assets/svg/Cart.vue';
import CosmicPizzaLogo from "../assets/img/CosmicPizzaLogo.webp"

</script>

<template>
    <div class=" w-full h-auto">

        <div class="flex flex-row justify-between bg-beige-200 p-4">

            <img :src="CosmicPizzaLogo" alt="CosmicPizzaLogo"
                class="w-auto h-12 col-span-2" />

            <div class="w-16 h-16 object-contain">
                <cart />
            </div>

        </div>

    </div>
</template>