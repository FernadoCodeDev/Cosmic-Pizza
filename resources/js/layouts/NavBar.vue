<script setup lang="ts">
import { ref } from "vue"
import HomeSVG from "../assets/svg/Home.vue"
import MenuSVG from "../assets/svg/Menu.vue"
import UserSVG from "../assets/svg/User.vue"

const items = [
    { name: "Home", SVG: HomeSVG },
    { name: "Menu", SVG: MenuSVG },
    { name: "User", SVG: UserSVG },
]

const activeIndex = ref(1) 
</script>

<template>
    <nav class="w-full sticky top-0 bg-slate-900 shadow-md">
        <div class="flex items-center justify-center gap-10 p-4 bg-white relative">

            <div v-for="(item, index) in items" :key="item.name"
                class="relative flex flex-col items-center cursor-pointer" @click="activeIndex = index">

                <div :class="[
                    'flex items-center justify-center w-16 h-16 rounded-full transition-all duration-300 relative z-10',
                    activeIndex === index
                        ? 'bg-cyan-500 text-white -mt-24 shadow-lg'
                        : 'bg-transparent text-slate-800'
                ]">
                    <component :is="item.SVG" class="w-10 h-10" />
                </div>

                <!-- Arc -->
                <div v-if="activeIndex === index"
                    class="absolute -top-[5rem] left-1/2 -translate-x-1/2 rotate-180 z-00 text-white dark:text-slate-950">
                    <svg width="100" height="80" viewBox="0 0 100 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0,50 A50,50 0 0 1 100,50 Z" fill="currentcolor" />
                    </svg>
                </div>

                <span class="text-xs mt-4">{{ item.name }}</span>
            </div>

        </div>
    </nav>
</template>
