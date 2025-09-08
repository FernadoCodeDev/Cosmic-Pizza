<script setup lang="ts">
import Header from '../layouts/Header.vue'
import Main from '../layouts/Main.vue'
import Footer from '../layouts/Footer.vue'
import NavBar from "../layouts/NavBar.vue"

</script>

<template>
    <div class="flex flex-col min-h-screen bg-slate-950">
        <Header />
        <Main />
        <Footer />
        <NavBar />
    </div>
</template>