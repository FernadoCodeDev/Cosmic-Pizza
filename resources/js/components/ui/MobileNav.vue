<script>
import Open from '@/assets/svg/Open.vue';
import Close from '@/assets/svg/Close.vue';

export default {
    components: {
        Open,
        Close,
    },
    data() {
        return {
            menuOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.menuOpen = !this.menuOpen;
        },
    },
};
</script>

<template>
    <div class="relative text-black">
        <div class="absolute flex flex-col gap-4 md:hidden">
            <button @click="toggleMenu"
                class=" p-2 w-16 h-16 object-contain  transition-all duration-700 ease-out bg-transparent">
                <Open />
            </button>

        </div>

        <div
            :class="`fixed  top-0 left-0 w-full backdrop-blur-[4px] bg-white/30  p-2 md:max-w-40 h-full bg-beige-200 transition-transform duration-700 ease-in-out transform z-50 ${menuOpen ? 'translate-x-0' : '-translate-x-full'}`">
            <div
                :class="`fixed  top-0 left-0 w-[90%]  p-2 md:max-w-40 h-full bg-beige-50 transition-transform duration-700 ease-in-out transform z-50 ${menuOpen ? 'translate-x-0' : '-translate-x-full'}`">
                <div class="flex flex-row justify-end p-2 mb-8">
                    <button @click="toggleMenu" class="text-black p-2 w-16 h-16 object-contain rounded-md">
                        <close class="" />
                    </button>
                </div>

                <h1 class="font-bold text-beige-950 mb-8">Iniciar sesión / Registrarse</h1>

                <nav
                    class="w-full flex flex-col pga-2 items-start transition-all duration-500 ease-in-out overflow-hidden">
                    <a href="/" class="p-2 text-base md:text-lg">
                        Home
                    </a>
                    <a href="/" class="p-2 text-base md:text-lg">
                        Contact
                    </a>
                    <a href="/" class="p-2 text-base md:text-lg">
                        Us
                    </a>
                </nav>

            </div>
        </div>
    </div>
</template>
