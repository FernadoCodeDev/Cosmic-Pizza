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
    <nav class="w-full sticky top-0 shadow-md">
        <div class="flex items-center justify-center gap-10 p-4 bg-beige-200 relative">

            <div v-for="(item, index) in items" :key="item.name"
                class="relative flex flex-col items-center cursor-pointer" @click="activeIndex = index">

                <div :class="[
                    'flex items-center justify-center w-16 h-16 rounded-full transition-all duration-300 relative z-10',
                    activeIndex === index
                        ? 'bg-sky-350 text-white -translate-y-[80%] shadow-lg'
                        : 'bg-transparent text-slate-950 translate-x-0'
                ]">
                    <component :is="item.SVG" class="w-10 h-10" />
                </div>

                <!-- Arc -->
                <div v-show="activeIndex === index"
                    class="absolute -top-8 -left-2/2 -translate-x-1/2 transition-transform duration-300 rotate-[180deg] text-slate-100"
                    :class="activeIndex === index ? 'translate-x-0' : 'translate-x-full'">
                    <svg width="100" height="80" viewBox="0 0 100 40">
                        <path d="M0,50 A50,50 0 0 1 100,50 Z" fill="currentcolor" />
                    </svg>
                </div>

                <!-- Border left -->
                <!-- To allow for rounded corners I first made one the 
                  same color so I could add another with rounded corners -->
                  
                <div v-if="activeIndex === index"
                    class="absolute -top-[1.2rem] rotate-[268deg] -left-[1.9rem] z-0 text-slate-100">
                    <svg width="20" height="20" viewBox="0 0 30 30">
                        <path d="M50,0 A50,50 0 0 1 0,50 L0,0 Z" fill="currentcolor" />
                    </svg>
                </div>

                <div v-if="activeIndex === index" class="absolute -top-[1.02rem] text-beige-200 rotate-[268deg] -left-[2rem] z-0">
                    <svg width="20" height="20" viewBox="0 0 50 50">
                        <path d="M50,0 A50,50 0 0 1 0,50 L0,0 Z" fill="currentcolor" />
                    </svg>
                </div>

                <!-- Border right -->
                <div v-if="activeIndex === index"
                    class="absolute -top-[1.2rem] rotate-[268deg] -right-[1.9rem] z-0 text-slate-100">
                    <svg width="20" height="20" viewBox="0 0 30 30">
                        <path d="M50,0 A50,50 0 0 1 0,50 L0,0 Z" fill="currentcolor" />
                    </svg>
                </div>

                <div v-if="activeIndex === index" class="absolute -top-[1.01rem] text-beige-200 rotate-[180deg] -right-[2rem] z-0">
                    <svg width="20" height="20" viewBox="0 0 50 50">
                        <path d="M50,0 A50,50 0 0 1 0,50 L0,0 Z" fill="currentcolor" />
                    </svg>
                </div>

                <span class="text-xs mt-4">{{ item.name }}</span>
            </div>

        </div>
    </nav>
</template>
