<script setup lang="ts">
import Cart from '@/assets/svg/Cart.vue';
import CosmicPizzaLogo from "../assets/img/CosmicPizzaLogo.webp"
import Nav from '@/components/ui/Nav.vue';
import MobileNav from '@/components/ui/MobileNav.vue';

</script>

<template>
    <div class="flex flex-col w-full h-auto p-2 bg-beige-200">

        <div class="grid grid-cols-3 w-full text-slate-950">

            <div class="md:hidden flex">
                <MobileNav 
                 textColor="text-beige-800 transition-all duration-700 ease-out"
                    hoverColor="hover:text-blue-500" 
                    bgColor="bg-transparent"
                />
            </div>

            <img :src="CosmicPizzaLogo" alt="CosmicPizzaLogo" class="w-auto h-20 object-contain mx-auto md:mx-0" />

            <div class="flex flex-row justify-center items-center gap-4 ms-auto md:col-span-2">

                <div class="hidden md:block">
                    <Nav 
                    textColor="text-beige-800 transition-all duration-700 ease-out"
                    hoverColor="hover:text-blue-500" 
                    bgColor="bg-transparent"
                   />
                </div>

                <div class="w-16 h-16 object-contain">
                    <cart />
                </div>
            </div>

        </div>
    </div>
</template>