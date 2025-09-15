<script setup lang="ts">
import DarkMode from "../../assets/img/DarkMode.webp";
import { ref, onMounted, watch } from "vue";
/* ref is the equivalent of useState and useEffect for Reactive state in Vue */

const darkMode = ref(false);

//  Component like useEffect with [ ]

//onMounted() It is used to execute logic after the component is mounted
onMounted(() => {
    const storedMode = localStorage.getItem("darkMode");
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    darkMode.value = storedMode ? storedMode === "true" : prefersDark;
});

// theme changes (such as with useEffect )
watch(darkMode, (newValue) => {
    const html = document.documentElement;
    if (newValue) {
        html.classList.add("dark");
        localStorage.setItem("darkMode", "true");
    } else {
        html.classList.remove("dark");
        localStorage.setItem("darkMode", "false");
    }
});

</script>

<template>

    <!-- onclick in Vue compared to React (onClick={()=> useDarkMode(!dark Mode)) -->
    <button @click="darkMode = !darkMode">
        <img :src="DarkMode" 
        alt="DarkMode" 
        class="w-8 h-auto cursor-pointer invert dark:invert-0" />
    </button>

</template>
