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
        <div class="flex items-center justify-center gap-2 p-2 bg-white h-auto relative">

            <div v-for="(item, index) in items" :key="item.name" @click="activeIndex = index"
                class="relative flex flex-col items-center cursor-pointer">

                <div :class="[
                    'flex items-center justify-center w-16 h-16 rounded-full text-black transition-all duration-300 relative z-10',
                    activeIndex === index ? 'bg-cyan-500 text-white border-4 border-slate-950 -mt-[80%] shadow-lg' : 'bg-transparent'
                ]">

                    <component :is="item.SVG" class="w-6 h-6" />
                </div>

                <div v-if="activeIndex === index" class="absolute -top-2 left-1/2 -translate-x-1/2 z-0">
                    <svg width="60" height="20" viewBox="0 0 60 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0,20 Q30,-20 60,20 Z" fill="white" />
                    </svg>
                </div>

                <span class="text-sm mt-1">{{ item.name }}</span>
            </div>
        </div>
    </nav>
</template>
