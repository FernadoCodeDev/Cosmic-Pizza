<script setup lang="ts">
import Cart from '@/assets/svg/Cart.vue';
import CosmicPizzaLogo from "../assets/img/CosmicPizzaLogo.webp"
import Nav from '@/components/ui/Nav.vue';
import MobileNav from '@/components/ui/MobileNav.vue';

</script>

<template>
    <div class="flex flex-col w-full h-auto bg-beige-200">

        <div class="relative flex flex-row justify-between  p-4">

            <div class="md:hidden flex">
                <MobileNav />
            </div>

            <img :src="CosmicPizzaLogo" alt="CosmicPizzaLogo" class="w-auto h-12 col-span-2" />

            <div class="flex flex-row justify-between gap-4">

                <div class="hidden md:block">
                    <Nav />
                </div>

                <div class="w-16 h-16 object-contain">
                    <cart />
                </div>
            </div>

        </div>



    </div>
</template>