<script setup lang="ts">
import Cart from '@/assets/svg/Cart.vue';
import CosmicPizzaLogo from "../assets/img/CosmicPizzaLogo.webp"
import Nav from '@/components/ui/Nav.vue';

</script>

<template>
    <div class="flex flex-col w-full h-auto bg-beige-200">

        <div class="flex flex-row justify-between  p-4">

            <img :src="CosmicPizzaLogo" alt="CosmicPizzaLogo" class="w-auto h-12 col-span-2" />

            <div class="hidden md:block">
                <Nav />
            </div>

            <div class="w-16 h-16 object-contain">
                <cart />
            </div>

        </div>

        <div class="md:hidden flex mx-auto">
            <Nav />
        </div>

    </div>
</template>