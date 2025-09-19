<script>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import MobileMenuIcon from '../../assets/img/MobileMenu.webp';
import HomeSVG from "../../assets/svg/Home.vue"
import MenuSVG from "../../assets/svg/Menu.vue"
import UserSVG from "../../assets/svg/User.vue"

export default {
  components: {
    HomeSVG,
    MenuSVG,
    UserSVG
  },
  setup() {
    const menuOpen = ref(false);
    const isMobile = ref(window.innerWidth < 768);
    const mobileMenuIcon = MobileMenuIcon;

    const handleResize = () => {
      isMobile.value = window.innerWidth < 768;
    };

    const toggleMenu = () => {
      menuOpen.value = !menuOpen.value;
    };

    onMounted(() => {
      window.addEventListener('resize', handleResize);
    });

    onBeforeUnmount(() => {
      window.removeEventListener('resize', handleResize);
    });

    return {
      menuOpen,
      isMobile,
      toggleMenu,
      mobileMenuIcon,
    };
  },
};
</script>

<template>
  <div class="p-2">
    <img v-if="isMobile" :src="mobileMenuIcon" alt="Mobile Menu" :class="`w-20 h-auto cursor-pointer ${invertColor}`"
      @click="toggleMenu" />

    <div :class="`w-full text-center transition-all duration-500 ease-in-out overflow-hidden 
        ${menuOpen ? 'max-h-[200px] opacity-100' : 'max-h-0 opacity-0'} 
        ${isMobile ? 'flex flex-col' : 'flex flex-row max-h-none opacity-100'}`">
      <div class="flex flex-row items-center justify-center gap-2 p-4">
        <div class="w-4 h-4 object-contain">
          <HomeSVG />
        </div>

        <a href="/" class="p-2 text-base md:text-lg">
          Home
        </a>
      </div>

      <div class="flex flex-row items-center justify-center gap-2 p-4">
        <div class="w-4 h-4 object-contain">
          <MenuSVG />
        </div>

        <a href="/" class="p-2 text-base md:text-lg">
          Menu
        </a>
      </div>

      <div class="flex flex-row items-center justify-center gap-2 p-4">
        <div class="w-4 h-4 object-contain">
          <UserSVG />
        </div>

        <a href="/" class="p-2 text-base md:text-lg">
          User
        </a>
      </div>
    </div>
  </div>
</template>