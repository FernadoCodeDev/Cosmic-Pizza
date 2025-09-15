<script setup lang="ts">
import Header from '../layouts/Header.vue'
import Main from '../layouts/Main.vue'
import Footer from '../layouts/Footer.vue'
import NavBar from "../layouts/NavBar.vue"

</script>

<template>
    <div class="flex flex-col min-h-screen bg-slate-100  ">
        <Header />
        <Main />
        <Footer class="md:block hidden"/>
        <NavBar class="block md:hidden"/>
    </div>
</template>