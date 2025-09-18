<script>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import MobileMenuIcon from '../../assets/img/MobileMenu.webp';

export default {
  props: {
    textColor: {
      type: String,
      default: 'text-gray-500',
    },
    hoverColor: {
      type: String,
      default: 'hover:text-gray-700',
    },
    bgColor: {
      type: String,
      default: 'bg-transparent',
    },
    invertColor: {
      type: String,
      default: 'invert',
    },
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
    <img
      v-if="isMobile"
      :src="mobileMenuIcon"
      alt="Mobile Menu"
      :class="`w-20 h-auto cursor-pointer ${invertColor}`"
      @click="toggleMenu"
    />

    <nav
      :class="`w-full text-center transition-all duration-500 ease-in-out overflow-hidden 
        ${menuOpen ? 'max-h-[200px] opacity-100' : 'max-h-0 opacity-0'} 
        ${isMobile ? 'flex flex-col' : 'flex flex-row max-h-none opacity-100'}`"
    >
      <a
        href="/"
        :class="`p-2 text-base md:text-xl font-bold ${bgColor} ${textColor} ${hoverColor}`"
      >
        Home
      </a>
      <a
        href="/"
        :class="`p-2 text-base md:text-xl font-bold ${bgColor} ${textColor} ${hoverColor}`"
      >
        Contact
      </a>
      <a
        href="/"
        :class="`p-2 text-base md:text-xl font-bold ${bgColor} ${textColor} ${hoverColor}`"
      >
        Us
      </a>
    </nav>
  </div>
</template>